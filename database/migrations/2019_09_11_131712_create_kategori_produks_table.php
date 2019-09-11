<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_produks', function (Blueprint $table) {
            $table->string('id_kategori',10)->primary();
            $table->string('nama_kategori',50);
            $table->timestamps();
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kategori_produks');
    }
}
