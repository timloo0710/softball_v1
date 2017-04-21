<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePitchersTable extends Migration
{
    /**
     * 壓制力.   1。當場比賽。 2。到目前比賽，累計 3。整個盃賽 4。跨盃賽，年度(時間起迄) 
     *  AO - 飛球出局 Fly Outs 投手 守備
     *  犧牲打：sacrifice hit 一體的兩面 打者 有得分，有進壘
     *  GO - 滾地球出局 Ground Outs 投手 守備
     *  短打：SB bunt 短打出局：bunt out 一事件的兩觀點 犧牲短打 犧牲打：sacrifice 打者 執行打帶跑戰術成功推進
     *  *  BB - 四壞球 Bases on Balls (Walks)
     *  K  SO - 三振 Strikeouts
     *  GIDP - 雙殺打 Grounded Into Double Plays，記錄 守備人員，先接殺，再傳壘包
     *  TP - 三殺打Triple Play
     *  
     *  假資料，背號一樣，人名換了。
     *  換背號後，再換人名
     *  產生器。
     *******************************
     *  ER - 責任失分 Earned Runs
     *  R - 得分 Runs Scored
     *  RBI - 打點 Runs Batted In
     ****************************
     *  共用事件  控制力
     *  HR - 被全壘打 Home Runs
     *  1B	一壘安打（一安）	Single 
     *  2B - 二壘安打 Doubles  失誤導致，內野漏接，滾到外野
     *  3B - 三壘安打 Triples  滾到牆腳 第一時間沒接好
     *  HBP - 觸身球 Hit by Pitch
     *  IBB - 故意四壞球Intentional Walks
     *  WP / wild pitches / 暴投
     *******************************
     *  AB - 打數 At Bats 
     *  H - 被安打數 Hits 打者
     *  LOB - 殘壘數 Left on Base
     *  IP - 投球局數 Innings Pitched
     *  PK - 投手策動牽制出局數 Pick-offs
     *  NP - 投球數 Number of Pitches Thrown 暫時不做
     *  SV - 救援成功 Saves
     ****************************************
     * @return void
     */
    public function up()
    {
        Schema::create('pitchers', function (Blueprint $table) {
            $table->increments('id'); //發生事件時的id 用球數， 未發生事件時 用球數 
            $table->string('match_id');
            $table->string('inning_id'); //上下半局
            $table->string('defender_id'); //投手也是守備人員 , 包含投球，牽制
            $table->string('attacker_id'); //打者，盜壘者共用
            $table->string('catcher')->nullable(); //補手牽制 ，成功才記，失敗造成對方進壘可計，無效牽制不必計
            $table->string('passedball')->nullable(); //野手漏接，那一位守備人員，失誤數統計

			$table->string('p_result');  //投球後的狀態 常見的結果 AO BB K  GIDP GO HR H ER 1B 2B 3B HBP IBB WP
			$table->string('a_result')->nullable();  //打擊後的狀態 SH  sacrifice bunt out
			$table->string('d_result');  //守備後的狀態 
            $table->string('outs'); //出局數 0,1,2,3
            $table->string('defense'); //守備力  GIDP 雙殺打
            $table->string('defense2')->nullable(); //守備力 AO - 飛球出局
            $table->string('defense3')->nullable(); //3壘上跑者
            $table->string('home')->nullable(); //本壘
            $table->integer('run')->nullable(); //得分，0, 1, 2, 3, 4   RBI - 打點 Runs Batted In

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
        Schema::drop('pitchers');
    }
}
