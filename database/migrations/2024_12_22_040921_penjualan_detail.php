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
    Schema::create('penjualan_detail', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('id_penjualan');
      $table->unsignedBigInteger('kode_produk');
      $table->bigInteger('harga_jual')->unsigned();
      $table->integer('jumlah')->unsigned();
      $table->integer('diskon')->unsigned();
      $table->bigInteger('sub_total')->unsigned();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('penjualan_detail');
    
  }
};
