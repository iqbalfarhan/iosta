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
            $table->string('kode_q', 7);
            $table->string('luas')->nullable();
            $table->string('br')->nullable();
            $table->string('sc')->nullable();
            $table->string('status')->nullable();
            $table->string('durasi')->nullable();
            $table->string('layanan')->nullable();
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