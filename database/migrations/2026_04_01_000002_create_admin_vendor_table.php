<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin_vendor', function (Blueprint $table) {
            $table->integer('id_admin_vendor')->autoIncrement();
            $table->integer('asal_vendor');
            $table->timestamps();

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
            ->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('asal_vendor', 'berasal_dari_vendor')
                ->references('id_vendor')->on('vendor')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_vendor');
    }
};
