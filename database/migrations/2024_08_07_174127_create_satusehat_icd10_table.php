<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatusehatIcd10Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(config('satusehatintegration.database_connection_master'))->create(config('satusehatintegration.icd10_table_name'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icd10_code');
            $table->longText('icd10_en');
            $table->longText('icd10_id')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->fullText(['icd10_en', 'icd10_id', 'icd10_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection(config('satusehatintegration.database_connection_master'))->dropIfExists(config('satusehatintegration.icd10_table_name'));
    }
}
