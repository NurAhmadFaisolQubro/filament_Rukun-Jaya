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
        Schema::create('stok_mlgs', function (Blueprint $table) {
            $table->id();
            $table->string('cabang');
            $table->string('cabang1');
            $table->integer('total_stok');
            $table->integer('total_produksi');
            $table->integer('harga_per_Bal');
            $table->integer('total_tagihan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_mlgs');
    }
};
