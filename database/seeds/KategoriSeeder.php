<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table kategori produk
        DB::table('kategori_produks')->insert([
            'id_produk' => 'P0000',
            'nama_produk' => 'Sate Klotok'
        ]);
    }
}
