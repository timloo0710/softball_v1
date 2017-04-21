<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cup_id');
            $table->date('holded_at');
            $table->string('game_order');
            $table->string('begin_time_set');
            $table->string('begin_time_act')->nullable();
            $table->string('js');//j 國中 s 高中
            $table->string('host_name');
            $table->string('visit_name');
            $table->integer('h_score')->nullable(); //總分 先守
            $table->integer('v_score')->nullable(); //總分  先攻
            $table->string('end_time_act')->nullable();
						
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
        Schema::drop('matches');
    }
}
