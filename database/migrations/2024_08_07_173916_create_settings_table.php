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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->enum('mode', ['dev', 'prod'])->default('dev');
            $table->string('satset_client_id');
            $table->string('satset_client_secret');
            $table->string('satset_org_id');
            $table->string('bpjs_cons_id')->nullable();
            $table->string('bpjs_secret_key')->nullable();
            $table->string('bpjs_user_key')->nullable();
            $table->string('bpjs_username')->nullable();
            $table->string('bpjs_password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
