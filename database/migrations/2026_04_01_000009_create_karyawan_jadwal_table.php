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
            $table->timestamps('');

            $table->integer('karyawan_id');
            $table->foreign('karyawan_id', 'karyawan_memiliki_jadwal')
                ->references('id_karyawan')->on('karyawan')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('jadwal_id');
            $table->foreign('jadwal_id', 'jadwal_memiliki_karyawan')
                ->references('id_jadwal')->on('jadwal')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('karyawan_jadwal');
    }
};
