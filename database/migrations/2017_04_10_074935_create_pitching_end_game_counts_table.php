<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePitchingEndGameCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pitching_end_game_counts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pitcher_id');
            $table->integer('match_id');
            $table->integer('completeGames');//0 or 1  CG - 完投 按match 加總
            $table->integer('gamesPlayed'); //0 or 1 G - 出賽數 按match 加總
            $table->integer('gamesStarted');//GS - 先發出賽數 按match 加總
            $table->integer('gamesRepeated');//GR - 重覆上場出賽數 按match 加總 壘球可重覆上場
            $table->integer('hold'); //HLD - 中繼成功
            $table->integer('losses'); //L - 敗投 
            $table->integer('shutouts'); //SHO - 完封
            $table->integer('saves'); //SV - 救援成功
            $table->integer('blownSave'); //BS – Blown save:救援失敗
            $table->integer('saveOpportunities'); //SVO - 救援機會
            $table->integer('wins'); //W - 勝投
            
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
        Schema::dropIfExists('pitching_end_game_counts');
    }
}
