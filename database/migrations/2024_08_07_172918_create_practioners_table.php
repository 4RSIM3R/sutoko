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
        Schema::create('practioners', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('satset_id')->unique();
            $table->enum('role', ['doctor', 'nurse', 'other']);
            $table->string('name');
            $table->date('birth_date');
            $table->enum('gender', ['male', 'female']);
            $table->string('address')->nullable();
            $table->timestamps();
            $table->index(['id', 'nik', 'satset_id']);
            $table->fullText(['name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practioners');
    }
};
