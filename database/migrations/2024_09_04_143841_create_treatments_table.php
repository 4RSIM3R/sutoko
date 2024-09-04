<?php

use App\Models\Insurer;
use App\Models\RoomClass;
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
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Insurer::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(RoomClass::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->string('code');
            $table->decimal('admin_fee')->default(0);
            $table->decimal('doctor_fee')->default(0);
            $table->decimal('paramedic_fee')->default(0);
            $table->decimal('facility_fee')->default(0);
            $table->decimal('total_price')->default(0);
            $table->boolean('covered_by_bpjs')->default(false);
            $table->timestamps();
            $table->index(['insurer_id', 'room_class_id']);
            $table->fullText(['name', 'code']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatments');
    }
};
