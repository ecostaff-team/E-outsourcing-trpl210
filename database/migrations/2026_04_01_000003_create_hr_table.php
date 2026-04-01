<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hr', function (Blueprint $table) {
            $table->integer('id_hr')->autoIncrement();
            $table->enum('status', ['Aktif', 'Tidak_aktif']);
            $table->string('username', 100);
            $table->string('password', 255);
            $table->string('nama', 255);
            $table->string('alamat', 255);
            $table->string('no_hp', 13);
            $table->string('email', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hr');
    }
};
