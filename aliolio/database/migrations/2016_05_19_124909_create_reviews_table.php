<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('idx');
            $table->string('social');
            $table->string('id');
            $table->string('PCODE', 20);
            $table->float('SPOINT');
            $table->text('REVIEW');
            $table->string('RCODE', 6);
            $table->timestamps();
            
            $table->foreign(['social','id'])->references(['social','id'])->on('users');
            $table->foreign('PCODE')->references('PCODE')->on('tb_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reviews');
    }
}