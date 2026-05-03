<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /* Tabel Hr dengan relasi ke tabel user */
    public function up(): void
    {
        Schema::create('hr', function (Blueprint $table) {
            $table->integer('id_hr')->autoIncrement();
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id_user')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hr');
    }
};
