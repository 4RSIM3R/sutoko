<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatusehatIcd9cmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(config('satusehatintegration.database_connection_master'))->create(config('satusehatintegration.icd9cm_table_name'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icd9cm_code');
            $table->longText('icd9cm_en');
            $table->longText('icd9cm_id')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->fullText(['icd9cm_en', 'icd9cm_id', 'icd9cm_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection(config('satusehatintegration.database_connection_master'))->dropIfExists(config('satusehatintegration.icd9cm_table_name'));
    }
};
