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
    Schema::create('pembelian', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('id_supplier');
      $table->integer('total_item')->unsigned();
      $table->bigInteger('total_harga')->unsigned();
      $table->integer('diskon')->unsigned();
      $table->bigInteger('bayar')->unsigned();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('pembelian');

  }
};
