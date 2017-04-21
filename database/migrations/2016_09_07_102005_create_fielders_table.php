<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     *  AO - 飛球出局 Fly Outs
     *  GO - 滾地球出局 Ground Outs
     *  GIDP - 雙殺打 Grounded Into Double Plays
     *  1B	一壘安打（一安）	Single
     *  2B - 二壘安打 Doubles
     *  3B - 三壘安打 Triples
     *  
     *   E - 失誤 Errors     
     *  passed ball 接手漏接球 
     *  wild throw 野傳球
     *  pick-off 牽制跑壘員的傳球
     *  throwing 傳球
     *  struck-out 三振出局 
     *  out, down, away 出局
     *  PO / put outs / 使出局數
     * PO - 刺殺 Putouts
     * @return void
     */
    public function up()
    {
        Schema::create('fielders', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('gid'); //替代 ball_id + matchid
            $table->integer('match_id');
            $table->integer('inning_id'); //上下半局
            $table->integer('patcher_id'); //投手投出的那一球，造成守備的失誤

            //$table->string('from'); // 傳出 牽制 傳球 守備位置
            $table->string('from_player'); //牽制 傳球 人決定，守備位置基本上就決定
            //$table->string('to'); // 接球 牽制 傳球
            $table->string('to_player'); //牽制 傳球
            //$table->string('through'); // 接球 牽制 傳球
            $table->string('through_player'); //牽制 傳球
            $table->string('error');
            $table->string('result'); //失誤，漏接，先判斷第一接球者是
            $table->string('memo');
						
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
        Schema::drop('fielders');
    }
}
