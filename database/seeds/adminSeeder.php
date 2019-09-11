<?php

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table admin produk
        DB::table('admins')->insert([
            'id' => '0000',
            'nama_admin' => 'admin',
            'email_admin' => 'admin@gmail.com',
            'password' => 'admin'
        ]);
    }
}
