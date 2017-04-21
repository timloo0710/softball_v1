<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePitchingCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pitching_counts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_id');
            $table->integer('pitcher_id');

            $table->integer('flyOuts'); //#AO 飛球出局
            $table->integer('basesOnBalls');//#BB - 四壞球
            $table->integer('balks'); //BK - 投手犯規
            $table->integer('caughtStealing'); //CS - 盜壘失敗
            $table->integer('earnedRuns'); //#ER - 責任失分
            $table->integer('groundedIntoDoublePlays'); //# GIDP - 雙殺打
            $table->integer('groundOuts'); //#GO - 滾球出局
            $table->integer('homeRuns'); //#HR - 被全壘打
            $table->integer('hitByPitch');//#HBP - 觸身球

            $table->integer('intentionalWalks'); //IBB - 故意四壞球
            $table->integer('numberOfPitchesThrown'); //NP - 投球數
            $table->integer('inningsPitched'); //#IP - 投球局數
            $table->integer('totalBattersFaced'); //BF – Total batters faced: opponent team's total plate appearances
            $table->integer('strikeouts'); //#SO - 三振 
            $table->integer('wildPitches'); //WP - 暴投


            $table->integer('inheritedRunsAllowed'); //IRA - 後援投手登場時已經上壘之跑壘員，在該名後援投手主投期間之得分。
            $table->integer('leftOnBase'); //LOB - 殘壘數
            $table->integer('pick-offs'); //PK - 投手策動牽制出局數
            $table->integer('totalBases'); //TB - 壘打數
            
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
        Schema::dropIfExists('pitching_counts');
    }
}
