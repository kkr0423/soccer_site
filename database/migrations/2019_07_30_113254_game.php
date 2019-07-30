<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Game extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('games', function (Blueprint $table) {
            $table-> bigIncrements('id');
            $table->date('game_date');
            $table->string('time');
            $table->string('place');
            $table->string('home_team');
            $table->integer('home_score');
            $table->integer('away_score');
            $table->string('away_team');
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
        //
        Schema::dropIfExists('games');
    }
}
