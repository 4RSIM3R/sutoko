<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kode_wilayah_indonesia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_wilayah');
            $table->longText('nama_wilayah');
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->index(['kode_wilayah']);
            $table->fullText(['nama_wilayah']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
