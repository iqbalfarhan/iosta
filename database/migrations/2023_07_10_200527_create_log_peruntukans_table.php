<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('log_peruntukans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peruntukan_id')->constrained()->cascadeOnDelete();
            $table->string('luas_awal')->nullable();
            $table->string('luas_baru')->nullable();
            $table->string('klasifikasi_awal')->nullable();
            $table->string('klasifikasi_baru')->nullable();
            $table->string('peruntukan_awal')->nullable();
            $table->string('peruntukan_baru')->nullable();
            $table->string('fileba')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_peruntukans');
    }
};