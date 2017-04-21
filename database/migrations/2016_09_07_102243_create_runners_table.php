<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRunnersTable extends Migration
{
    /**
     * Run the migrations.
     * 盜壘：steal 盜壘失敗：caught stealing 盜壘成功：stolen base 雙盜壘：double steal
     * @return void
     */
    public function up()
    {
        Schema::create('runners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_id');
            $table->integer('inning_id'); //上下半局
            $table->string('runner');
            $table->string('from');  //一，二，三，本
            $table->string('to');    //一，二，三，本
            $table->integer('score'); //誰跑回來得分  盜壘
            $table->string('result');
            $table->string('error');
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
        Schema::drop('runners');
    }
}
