<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kepala_departement', function (Blueprint $table) {
            $table->integer('id_departement')->autoIncrement();
            $table->string('nama', 255);
            $table->string('username', 100);
            $table->string('nama_departement', 255);
            $table->enum('status', ['Aktif', 'Tidak_aktif']);
            $table->string('email', 255);
            $table->string('alamat', 255);
            $table->string('password', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kepala_departement');
    }
};
