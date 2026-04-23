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
            $table->integer('vendor_id');
            $table->timestamps();

            $table->integer('hr_id');
            $table->foreign('hr_id')
            ->references('id_hr')->on('hr')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('vendor_id', 'berasal_dari_vendor')
                ->references('id_vendor')->on('vendor')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_vendor');
    }
};
