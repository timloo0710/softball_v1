<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakebasesTable extends Migration
{
    /**
     * Run the migrations.
     * 安全上壘：take base
     * @return void
     */
    public function up()
    {
        Schema::create('takebases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_id');
            $table->integer('inning_id'); //上下半局
            $table->string('1B'); //1壘上跑者
            $table->string('2B'); //2壘上跑者
            $table->string('3B'); //3壘上跑者
            $table->string('home'); //本壘
            $table->string('home2'); //本壘
            $table->string('home3'); //本壘
            $table->string('home4'); //本壘
            $table->integer('run'); //得分，0, 1, 2, 3, 4 
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
        Schema::dropIfExists('takebases');
    }
}
