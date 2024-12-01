<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostingsTable extends Migration
{
    public function up()
    {
        Schema::create('posting', function (Blueprint $table) {
            $table->id('id_posting');
            $table->text('image_posting')->nullable();
            $table->unsignedBigInteger('id_toko');
            $table->integer('likes')->default(0);
            $table->text('comment')->nullable();
            $table->text('caption')->nullable();
            $table->timestamps();

            $table->foreign('id_toko')->references('id_toko')->on('toko')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('postings');
    }
}
