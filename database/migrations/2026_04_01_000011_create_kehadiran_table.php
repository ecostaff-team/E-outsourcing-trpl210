<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kehadiran', function (Blueprint $table) {
            $table->integer('id_kehadiran')->autoIncrement();
            $table->timestamp('waktu_masuk')->nullable();
            $table->timestamp('waktu_keluar')->nullable();
            $table->date('tanggal');
            $table->string('lokasi_masuk', 255);
            $table->string('lokasi_keluar', 255);
            $table->integer('id_jadwal');
            $table->integer('id_tipe_kehadiran');
            $table->timestamps();
            $table->integer('rekapan_kehadiran');

            $table->foreign('id_jadwal', 'jadwal_mencatatt_kehadiran')
                ->references('id_jadwal')->on('jadwal')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_tipe_kehadiran', 'tipe_dari_kehadiran')
                ->references('id_tipe_kehadiran')->on('tipe_kehadiran')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('rekapan_kehadiran', 'rekapan_dari_kehadiran')
                ->references('id_rekap')->on('rekap_kehadiran')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kehadiran');
    }
};
