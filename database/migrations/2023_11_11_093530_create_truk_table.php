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
        Schema::create('truk', function (Blueprint $table) {
            $table->id();
            $table->integer('Truk_ID');
            $table->integer('Jumlah_Roda_Ban');
            $table->double('Luas_Area_Kargo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('truk');
    }
};
