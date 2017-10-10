<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddZplSerialAlternativeToSettings extends Migration
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
                $table->string('zpl_serial_alternative', 191)->nullable()->default(NULL);
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
            $table->dropColumn('zpl_serial_alternative');
        });
    }
}
