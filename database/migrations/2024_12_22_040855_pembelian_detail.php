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
    Schema::create('pembelian_detail', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('id_pembelian');
      $table->unsignedBigInteger('kode_produk');
      $table->unsignedBigInteger('harga_beli');
      $table->integer('jumlah')->unsigned();
      $table->bigInteger('sub_total')->unsigned();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    //
  }
};
