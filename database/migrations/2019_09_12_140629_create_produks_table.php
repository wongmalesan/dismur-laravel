<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->string('id_produk',20)->primary();
            $table->string('nama_produk');
            $table->dateTime('tanggal_input');
            $table->date('event_begin')->nullable();
            $table->date('event_end')->nullable();
            $table->integer('harga');
            $table->integer('diskon')->nullable();
            $table->string('id_user');
            $table->string('id_kategori');
            $table->string('foto_produk');
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
        Schema::dropIfExists('produks');
    }
}
