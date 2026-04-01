<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tipe_kehadiran', function (Blueprint $table) {
            $table->integer('id_tipe_kehadiran')->autoIncrement();
            $table->enum('status_kehadiran', ['hadir', 'tidak_hadir']);
            $table->string('bukti', 255);
            $table->enum('keterangan', ['masuk kerja', 'libur', 'mankir', 'sakit']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tipe_kehadiran');
    }
};
