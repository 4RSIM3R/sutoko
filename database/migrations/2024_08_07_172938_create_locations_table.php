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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('satset_id');
            $table->string('name');
            $table->string('reference');
            $table->enum('type', ['bu', 'wi', 'co', 'ro', 've', 'ho', 'ca', 'rd', 'area']);
            $table->timestamps();
            $table->index(['satset_id', 'type', 'reference']);
            $table->fullText(['name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
