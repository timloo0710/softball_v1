<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHittersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hitters', function (Blueprint $table) {
            $table->increments('id');
						$table->integer('gid'); //替代 ball_id + matchid
						$table->string('hitter');
						$table->string('result'); 
						$table->string('track');
						$table->integer('x')->nullable();
						$table->integer('y')->nullable();
						$table->string('position');
						$table->integer('hitpoint')->nullable();
						$table->string('memo')->nullable(); //界外(本壘後)，右方，左方，揮空，擦棒，不揮，
						
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
        Schema::drop('hitters');
    }
}
