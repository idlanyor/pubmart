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
    Schema::create(
      'produk',
      function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('kode_produk');
        $table->unsignedBigInteger('id_kategori');
        $table->string('nama_produk');
        $table->string('merk', 50);
        $table->bigInteger('harga_beli')->unsigned();
        $table->bigInteger('harga_jual')->unsigned();
        $table->integer('diskon')->unsigned();
        $table->integer('stok')->unsigned();
        $table->timestamps();
      }
    );
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('produk');
  }
};
