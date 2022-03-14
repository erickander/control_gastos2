<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
Schema::create('users', function (Blueprint $table) {
            $table->id('usu_id');
            $table->string('usu_name');
            $table->string('usu_rol');
            $table->string('password');
            $table->string('usu_email')->unique();
            $table->string('usu_cedula')->unique();
            $table->rememberToken();
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
    Schema::dropIfExists('users');
    }
}
