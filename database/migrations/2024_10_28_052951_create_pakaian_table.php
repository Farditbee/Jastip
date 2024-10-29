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
        Schema::create('pakaian', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_pakaian')->nullable();
            $table->string('nama_pakaian');
            $table->string('kategori_id');
            $table->enum('size', ['S','M','L','XL','XXL','XXXL']);
            $table->double('harga');
            $table->integer('stok');
            $table->string('keterangan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakaian');
    }
};
