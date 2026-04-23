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
        Schema::create('rekap_kehadiran', function (Blueprint $table) {
            $table->integer('id_rekap')->autoIncrement();
            $table->integer('mangkir')->default(0);
            $table->integer('izin')->default(0);
            $table->integer('sakit')->default(0);
            $table->integer('cuti')->default(0);
            $table->integer('hadir')->default(0);
            $table->integer('total_lembur')->default(0);
            $table->integer('total_jam_kerja')->default(0);
            $table->integer('total_terlambat')->default(0);
            $table->string('pemvalidasi', 255);
            $table->timestamps();
            $table->date('tanggal_validasi')->nullable();
            $table->enum('status_validasi', ['Valid', 'Tidak_Valid']);
            $table->date('tanggal_rekap')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rekap_kehadiran');
    }
};
