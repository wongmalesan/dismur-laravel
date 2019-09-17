<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDismursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_dismurs', function (Blueprint $table) {
            $table->string('id_user',10)->primary();
            $table->string('email_user',50)->unique();
            $table->string('password');
            $table->string('id_detail_user');
            $table->string('role_user');
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
        Schema::dropIfExists('user_dismurs');
    }
}
