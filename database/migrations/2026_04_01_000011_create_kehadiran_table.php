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
            $table->timestamp('waktu_telat')->nullable();
            $table->date('tanggal');
            $table->string('lokasi_masuk', 255);
            $table->string('lokasi_keluar', 255);

            $table->string('bukti', 255);
            $table->text('keterangan')->default('hadir');
            $table->timestamps();
            $table->integer('rekapan_kehadiran_id');

            $table->integer('jadwal_id');
            $table->foreign('jadwal_id', 'jadwal_mencatatt_kehadiran')
                ->references('id_jadwal')->on('jadwal')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('tipe_kehadiran_id');
            $table->foreign('tipe_kehadiran_id', 'tipe_dari_kehadiran')
                ->references('id_tipe_kehadiran')->on('tipe_kehadiran')
                ->onDelete('cascade')->onUpdate('cascade');


            $table->foreign('rekapan_kehadiran_id', 'rekapan_dari_kehadiran')
                ->references('id_rekap')->on('rekap_kehadiran')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kehadiran');
    }
};
