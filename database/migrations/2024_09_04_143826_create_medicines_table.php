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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('trademark');
            $table->string('bpjs_code');
            $table->string('kfa_code');
            $table->decimal('sell_price');
            $table->decimal('buy_price');
            $table->decimal('stock');
            $table->boolean('covered_by_bpjs')->default(false);
            $table->enum('category', ['drug', 'medical_devices', 'pharmacy_equipment', 'other']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
