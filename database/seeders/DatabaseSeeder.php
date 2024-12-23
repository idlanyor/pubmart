<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();

    DB::table('users')->insert(array(
      [
        'name'=>'Roynaldi',
        'email'=>'prasbhara0604@gmail.com',
        'password'=>Hash::make('ngeteh789'),
        'foto'=>'user.png',
        'level'=> 1,
      ],
      [
        'name'=>'Sonata',
        'email'=>'sonata@gmail.com',
        'password'=>Hash::make('ngeteh789'),
        'foto'=>'user.png',
        'level'=> 2,
      ],
    ));
    DB::table('setting')->insert(array(
      [
        'nama_outlet'=>'Wisesa',
        'alamat'=>'Karangreja',
        'telepon'=>'085328913428',
        'logo'=>'logo.png',
        'kartu_member'=>'card.png',
        'diskon_member'=>'10',
        'tipe_nota'=> 1,
      ]
    ));
  }
}
