<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user'); // ID utama
            $table->unsignedBigInteger('id_role'); // Foreign key ke tabel roles
            $table->string('email', 100)->unique(); // Email unik
            $table->string('no_telp', 20); // Nomor telepon
            $table->string('password', 255); // Kata sandi
            $table->string('username', 50); // Nama pengguna
            $table->text('alamat')->nullable(); // Alamat opsional
            $table->timestamps();

            // Menambahkan relasi foreign key
            $table->foreign('id_role')->references('id_role')->on('roles')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
