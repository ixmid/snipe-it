<?php
namespace App\Http\Controllers;

use Auth;
use DB;
use Lang;
use App\Models\Company;
use App\Models\Setting;
use Input;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use Str;
use View;
use App\Models\Asset;
use Redirect;

use Log;

/*
use App\Http\Requests\AssetCheckinRequest;
use App\Http\Requests\AssetCheckoutRequest;
use App\Http\Requests\AssetFileRequest;
use App\Http\Requests\AssetRequest;
use App\Http\Requests\ItemImportRequest;
use App\Models\Actionlog;
use App\Models\AssetModel;
use App\Models\CustomField;
use App\Models\Import;
use App\Models\Location;
use App\Models\User;
use Artisan;
use Carbon\Carbon;
use Config;
use Gate;
use Image;
use League\Csv\Reader;
use Log;
use Mail;
use Paginator;
use Response;
use Slack;
use Validator;
use Route;
*/
/*
use App\Models\Statuslabel;
*/

use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * This controller handles all actions related to printing labels using a ZPL printer
 *
 * @version    v1.0
 */
class ZplPrintController extends Controller
{
    function __construct() {
        $this->settings = Setting::getSettings();
        //$this->middleware('auth');
        //parent::__construct();
    }

    /**
    *  Handle printing of a single label
    *
    * @param int $asset_id
    * @return json
    **/
    public function printSingleLabel($asset_id = null)
    {
    }

    /**
    *  Takes raw array from the bulk edit form and returns asset IDs.
    *
    * @param array $asset_raw_array
    * @return array
    **/
    private function getAssetIdsFromBulkEdit($asset_raw_array = array())
    {
        $asset_ids = [];
        foreach ($asset_raw_array as $asset_id => $value) {
            $asset_ids[] = $asset_id;
        }
        return $asset_ids;
    }

    /**
    *  Handler for labels printed from bulk edit view.
    *
    * @return View
    **/
    public function processLabelsFromBulkEdit($assets = null)
    {
        $asset_ids = [];

        if (!Company::isCurrentUserAuthorized()) {
            return redirect()->to('hardware')->with('error', \Lang::get('general.insufficient_permissions'));
        } elseif (!Input::has('ids')) {
            return redirect()->back()->with('error', 'No assets selected');
        } else {
            $raw_assets = Input::get('ids');
            $asset_ids = $this->getAssetIdsFromBulkEdit($raw_assets);
        }

        if ($this->settings->qr_code=='1') {
            //if($this->settings->barcode_type === 'ZPL') {
                return $this->outputAssetLabelsToZPL($asset_ids, 'bulk');
            /*} else {
                return $this->outputAssetLabelsToAvery($asset_ids);
            }*/
        } else {
            // Barcode labels not enabled
            return redirect()->to("hardware")->with('error','Barcodes are not enabled in Admin > Settings');
        }
    }

    /**
    *  Generates a printable page compatible with several standard
    *  avery brand label sheets.
    *
    * @param array $asset_ids
    * @return View
    **/
    public function outputAssetLabelsToAvery($asset_ids = null)
    {
        if($asset_ids === null) {
            return redirect()->back()->with('error', 'No assets selected');
        }
        $assets = Asset::find($asset_ids);
        $assetcount = count($assets);
        $count = 0;
        return View::make('backend/hardware/labels')->with('assets',$assets)->with('settings',$this->settings)->with('count',$count);
    }

    /**
    *  Connects to ZPL capable network printer
    *  and generates ZPL markup for printing labels.
    *
    * @param array $asset_ids
    * @return Redirect
    **/
    public function outputAssetLabelsToZPL($asset_ids = null, $mode = 'ajax')
    {
        $verbose = false;
        $redirect = false;
        $status = 'OK';
        $statusMessage = 'Labels sent to printer';
        $printerIp = '';
        $printerPort = '9100'; // Default port for raw connections to ZPL printers
        $labelFormat = $this->settings->zpl_label_format;
        $labelTemplate = $this->settings->zpl_template;

        if($mode === 'bulk') {
            $verbose = true;
            $redirect = true;
        }

        // Get ready for lots of ugly!
        if($asset_ids === null) {
            return redirect()->back()->with('error', 'No assets selected');
        }
        $assets = Asset::find($asset_ids);

        $printer = $this->settings->zpl_printer;
        if($printer!='') {
            if(strpos($printer, ':') === false) {
                $printerIp = $printer;
            } else {
                list($printerIp, $printerPort) = explode(':', $printer);
            }
        } else {
            return redirect()->to("hardware")->with('error','ZPL printer address not configured');
        }

        if($labelTemplate=='') {
            return redirect()->to("hardware")->with('error','No ZPL template configured');
        }
        if($verbose) {
            echo "Attempting to create socket...";
        }
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if ($socket === false) {
            $status = "ERROR";
            $statusMessage = "socket_create() failed: reason: " . socket_strerror(socket_last_error());
            if($verbose) {
                echo $statusMessage."<br>";
            }
        } else {
            if($verbose) {
                echo "OK.<br>\n";
            }
        }

        if($verbose) {
            echo "Attempting to connect to '$printerIp' on port '$printerPort'...";
        }
        $result = socket_connect($socket, $printerIp, $printerPort);
        if ($result === false) {
            $status = "ERROR";
            $statusMessage = "socket_connect() failed.\nReason: ($result) " . socket_strerror(socket_last_error($socket));
            if($verbose) {
                echo $statusMessage."<br>";
            }
        } else {
            if($verbose) {
                echo "OK.<br>\n";
            }
        }

        if($verbose) {
            echo "Loading label format...";
        }

// This should go into settings as a textarea to let the end-user write their own label markup.
// Optionally maybe have a couple label formats for people to start from
        socket_write($socket, <<<FORMAT
^XA
^DFR:snipeit.GRF^FS
$labelTemplate
^XZ
FORMAT
);
        if($verbose) {
            echo "OK.<br><br>";
        }


        if($verbose) {
            echo "Printing labels...<br>\n";
        }

        foreach($assets as $asset) {

            if($verbose) {
                echo "Printing $asset->asset_tag<br>";
            }

            socket_write($socket, <<<LABEL_START
^XA
^XFR:snipeit.GRF^FS
LABEL_START
);

            // QR Code
            socket_write($socket, '^FN1^FDQA,'.route('hardware.show', $asset->id).'^FS');

            // Label Header
            if($this->settings->qr_text!='') {
                socket_write($socket, '^FN2^FD'.$this->settings->qr_text.'^FS');
            }

            // Asset Tag
            if($asset->asset_tag!='') {
                socket_write($socket, '^FN3^FDT: '.$asset->asset_tag.'^FS');
                socket_write($socket, '^FN3^FD'.$asset->asset_tag.'^FS');
            }

            // Asset Name
            if($asset->name!='') {
                socket_write($socket, '^FN4^FDN: '.$asset->name.'^FS');
            } else {
                socket_write($socket, '^FN4^FDN: '.html_entity_decode($asset->model->manufacturer->name).' '.html_entity_decode($asset->model->model_number).'^FS');
            }

            // Asset Model
            if($asset->model!='') {
                socket_write($socket, '^FN5^FDM: '.html_entity_decode($asset->model->name).'^FS');
                socket_write($socket, '^FN6^FDN: '.html_entity_decode($asset->model->model_number).'^FS');
            }

            // Asset Serial
            if($asset->serial!='') {
                socket_write($socket, '^FN7^FDS: '.$asset->serial.'^FS');
            }

            socket_write($socket, '^XZ');
        }

        if($verbose) {
            echo "<br>Closing socket...";
        }
        socket_close($socket);
        if($verbose) {
            echo "OK.<br><br>";
        }

        if($redirect === true && $status === 'OK') {
            return redirect()->to("hardware")->with('success','Labels sent to printer');
        } elseif($redirect === true && $status !== 'OK') {
            return redirect()->to("hardware")->with('error',$statusMessage);
        }
        if($mode === 'ajax') {
            return response()->json(['status' => $status, 'message' => $statusMessage, 'redirect_url' => route('hardware.index')]);
        }

    }
}
