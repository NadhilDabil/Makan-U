<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->bigIncrements('id_notification'); // Primary key
            $table->unsignedBigInteger('id_user'); // Foreign key ke user
            $table->unsignedBigInteger('id_promo'); // Foreign key ke promo
            $table->boolean('is_read')->default(false); // Notifikasi sudah dibaca atau belum
            $table->timestamps(); // Kolom created_at dan updated_at

            // Tambahkan foreign key constraint
            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
            $table->foreign('id_promo')->references('id_promo')->on('promo')->onDelete('cascade');
        });
    }

    /**
     * Batalkan migrasi.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
