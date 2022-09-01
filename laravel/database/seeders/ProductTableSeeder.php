<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipeProduk = ['Sepatu','Baju','Celana'];

        for($a=1; $a < 11; $a++)
        DB::table('product')->insert([
            'nama_produk' => Str::random(10),
            'deskripsi' => Str::random(50),
            'harga' => 10000*$a ,
            'tipe_produk' => $tipeProduk[rand(0,2)],
            'foto_produk' => 'foto.png',
        ]);
    }
}
