<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('karyawan_jadwal', function (Blueprint $table) {
            $table->integer('id_relasi')->autoIncrement();
            $table->integer('id_karyawan');
            $table->integer('id_jadwal');
            $table->timestamps();

            $table->foreign('id_karyawan', 'karyawan_memiliki_jadwal')
                  ->references('id_karyawan')->on('karyawan')
                  ->onDelete('cascade')->onUpdate('cascade');
                  
            $table->foreign('id_jadwal', 'jadwal_memiliki_karyawan')
                  ->references('id_jadwal')->on('jadwal')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('karyawan_jadwal');
    }
};
