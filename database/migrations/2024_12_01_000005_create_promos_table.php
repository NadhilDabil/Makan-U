<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromosTable extends Migration
{
    public function up()
    {
        Schema::create('promo', function (Blueprint $table) {
            $table->id('id_promo');
            $table->text('Desk_promo');
            $table->date('jangka_waktu_mulai');
            $table->date('jangka_waktu_berhenti');
            $table->unsignedBigInteger('id_toko');
            $table->timestamps();

            $table->foreign('id_toko')->references('id_toko')->on('toko')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('promos');
    }
}
