<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vendor', function (Blueprint $table) {
            $table->integer('id_vendor')->autoIncrement();
            $table->string('vendor_name', 255);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('phone_number', 13);
            $table->string('email', 255);
            $table->string('alamat', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vendor');
    }
};
