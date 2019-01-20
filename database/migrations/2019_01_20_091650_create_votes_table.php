<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            // Country who voted
            $table->integer('voted')->unsigned();
            // Country who received vote
            $table->integer('voted_for')->unsigned();
            $table->integer("votes");
            $table->timestamps();
        });

        Schema::table('votes', function($table){
            $table->foreign('voted')->references('id')->on('countries');
            $table->foreign('voted_for')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
