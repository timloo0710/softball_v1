<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseRunningCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_running_counts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('runner_id');
            $table->integer('match_id');
            $table->integer('stolenBase');//SB - 盜壘成功
            $table->integer('caughtStealing'); //CS - 盜壘失敗
            $table->integer('stolenBaseAttempts'); //SBA - 盜壘總數
            $table->integer('errors'); // E - 失誤 
             
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
        Schema::dropIfExists('base_running_counts');
    }
}
