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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('Model');
            $table->integer('Tahun');
            $table->integer('Jumlah_Penumpang');
            $table->string('Manufaktur');
            $table->double('Harga');
            $table->string('Jenis_Kendaraan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
