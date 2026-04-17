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
            $table->string('nama_departement', 255);
            $table->timestamps();

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
            ->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kepala_departement');
    }
};
