<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBattingCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batting_counts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hitter_id');
            $table->integer('match_id');
            $table->integer('single');//#1B	一壘安打（一安）
            $table->integer('doubles');//#2B - 二壘安打
            $table->integer('triples');//#3B - 三壘安打
            $table->integer('hits');//#H - 安打
            $table->integer('extraBaseHits');//XBH - 長打 
            $table->integer('homeRuns'); //HR - 被全壘打

            $table->integer('atBats');//AB - 打數

            $table->integer('flyOuts'); //AO 飛球出局
            $table->integer('basesOnBalls');//#BB - 四壞球
            $table->integer('groundedIntoDoublePlays'); // GIDP - 雙殺打
            $table->integer('groundOuts'); //GO - 滾球出局
            $table->integer('intentionalWalks'); //IBB - 故意四壞球
            $table->integer('strikeouts'); //#SO - 三振 
            $table->integer('totalBases'); //TB - 壘打數
             
            $table->integer('hitByPitch');//HBP - 觸身球

            $table->integer('runsScored');//#R - 得分 
            $table->integer('runsBattedIn');//RBI - 打點 

            $table->integer('sacrificeFlies');//#SF - 犧牲飛球 
            $table->integer('sacrificeHits');//#SH - 犧牲觸擊 
            $table->integer('triplePlay');//TP - 三殺打 
            $table->integer('leftOnBase'); //LOB - 殘壘數
    
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
        Schema::dropIfExists('batting_counts');
    }
}
