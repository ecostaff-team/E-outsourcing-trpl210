<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lembur', function (Blueprint $table) {
            $table->integer('id_lembur')->autoIncrement();
            $table->timestamp('mulai_lembur')->nullable();
            $table->timestamp('selesai_lembur')->nullable();
            $table->timestamp('tanggal_dibuat')->nullable();
            $table->enum('status', ['Lembur', 'Tidak_lembur']);
            $table->integer('id_karyawan');
            $table->timestamps();

            $table->foreign('id_karyawan', 'fk_karyawan')
                  ->references('id_karyawan')->on('karyawan')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lembur');
    }
};
