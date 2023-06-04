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
        Schema::create('werehouse', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50 );
            $table->string('jenisproduk',50 );
            $table->string('harga',50 );
            $table->date('produksi' );
            $table->date('expired' );
            $table->string('lokasi',50 );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('werehouse');
    }
};
