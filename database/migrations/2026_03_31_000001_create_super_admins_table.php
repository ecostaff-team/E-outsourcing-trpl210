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
        Schema::create('super_admin', function (Blueprint $table) {
            $table->integer('id_super_admin')->autoIncrement();
            $table->string('name')->unique();
            $table->string('password');
            $table->timestamps();

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
            ->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('super_admin');
    }
};
