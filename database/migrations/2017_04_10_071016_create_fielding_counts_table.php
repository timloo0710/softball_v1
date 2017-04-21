<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldingCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fielding_counts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fielder_id');
            $table->integer('match_id');

            $table->integer('Assists');//#A - 助殺 
            $table->integer('caughtStealing'); //CS - 抓到盜壘失敗
            $table->integer('doublePlays'); // DP - 雙殺守備
            $table->integer('errors'); //# E - 失誤 
            $table->integer('outfieldAssists'); //# OFA - 外野助殺
            $table->integer('passedBalls'); //# PB - 捕逸
            $table->integer('putouts'); // PO - 刺殺
            $table->integer('stolenBases'); // SB - 被盜壘成功 Stolen Bases (allowed)
            $table->integer('totalChances'); // TC - 守備機會 Total Chances
            $table->integer('triplePlays'); // TP - 三殺守備 Triple Plays

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
        Schema::dropIfExists('fielding_counts');
    }
}
