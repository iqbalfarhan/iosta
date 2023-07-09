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
        Schema::create('peruntukans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lokasi_id')->constrained()->cascadeOnDelete();
            $table->enum('fungsi', config('ios.listFungsiGedung'));
            $table->enum('klasifikasi', config('ios.listKlasifikasi'));
            $table->string('peruntukan');
            $table->string('luas')->nullable();
            $table->string('status')->nullable();
            $table->string('durasi')->nullable();
            $table->string('layanan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peruntukans');
    }
};