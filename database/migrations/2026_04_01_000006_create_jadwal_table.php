<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->integer('id_jadwal')->autoIncrement();
            $table->enum('status', ['Aktif', 'Tidak_aktif']);
            $table->date('tanggal');
            $table->integer('dibuat_oleh');
            $table->integer('shift_id');
            $table->timestamps();

            $table->foreign('shift_id', 'jadwa_diatur_shift')
                ->references('id_shift')->on('shiift')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
