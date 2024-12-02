<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id('id_user');
            $table->unsignedBigInteger('id_role');
            $table->string('email', 100)->unique();
            $table->string('no_telp', 20);
            $table->string('password', 255);
            $table->string('username', 50);
            $table->text('alamat')->nullable();
            $table->timestamps();


            $table->foreign('id_role')->references('id_role')->on('role')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
}
