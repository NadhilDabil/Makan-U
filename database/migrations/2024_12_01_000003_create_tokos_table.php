<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokosTable extends Migration
{
    public function up()
    {
        Schema::create('tokos', function (Blueprint $table) {
            $table->id('id_toko'); // ID utama untuk tabel tokos
            $table->unsignedBigInteger('id_user'); // Foreign key manual
            $table->string('nama_toko', 100); // Nama toko
            $table->text('alamat_toko'); // Alamat toko
            $table->string('image_toko')->nullable(); // URL gambar toko
            $table->string('image_utama')->nullable(); // URL gambar utama toko
            $table->decimal('rating', 3, 2)->nullable(); // Rating toko
            $table->time('waktu_operasional_buka')->nullable(); // Jam buka
            $table->time('waktu_operasional_tutup')->nullable(); // Jam tutup
            $table->integer('count')->default(0); // Hitungan transaksi
            $table->string('lokasi_toko', 100)->nullable(); // Lokasi toko
            $table->timestamps(); // Timestamp

            // Definisi relasi foreign key
            $table->foreign('id_user')
                  ->references('id_user')
                  ->on('users')
                  ->onDelete('cascade'); // Hapus toko jika user dihapus
        });
    }

    public function down()
    {
        Schema::dropIfExists('tokos');
    }
}

