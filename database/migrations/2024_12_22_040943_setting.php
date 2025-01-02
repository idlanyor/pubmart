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
    Schema::create('setting', function (Blueprint $table) {
      $table->id();
      $table->string('nama_outlet');
      $table->text('alamat');
      $table->string('telepon');
      $table->string('logo');
      $table->string('kartu_member');
      $table->integer('diskon_member');
      $table->integer('tipe_nota');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('setting');
  }
};
