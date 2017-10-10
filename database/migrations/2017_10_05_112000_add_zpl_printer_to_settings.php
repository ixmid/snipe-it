<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddZplPrinterToSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try  {
            Schema::table('settings', function ($table) {
                $table->string('zpl_printer', 32)->nullable()->default(NULL);
                $table->text('zpl_template')->nullable()->default(NULL);
                $table->boolean('zpl_print_on_asset_create')->default(FALSE);
            });
        } catch (\Exception $e) {
            //echo $e;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function ($table) {
            $table->dropColumn('zpl_printer');
            $table->dropColumn('zpl_template');
            $table->dropColumn('zpl_print_on_asset_create');
        });
    }
}
