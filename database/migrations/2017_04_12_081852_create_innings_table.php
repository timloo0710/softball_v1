<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_id'); 
            $table->string('halfInning'); // U1 , D1,U2,D2,U3, D3, U4, D4, U5, D5, U6, D6, U7, D7, U8, D8 一次產生14筆 7局
            $table->integer('begin_attacker_id');  
            $table->integer('end_attacker_id');  
            $table->integer('begin_pitcher_id');  
            $table->integer('end_pitcher_id');  
            $table->integer('scores'); //累積得分
            $table->integer('throwns'); //投球數  
            $table->string('finished')->nullable(); //F 本半局結束 null 表示沒打 
            $table->text('memo');
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
        Schema::dropIfExists('innings');
    }
}
