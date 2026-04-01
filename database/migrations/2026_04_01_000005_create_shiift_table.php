<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shiift', function (Blueprint $table) {
            $table->integer('id_shift')->autoIncrement();
            $table->time('jam_masuk');
            $table->time('jam_keluar');
            $table->enum('tipe_shift', ['Pagi', 'Sore', 'Malam']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shiift');
    }
};
