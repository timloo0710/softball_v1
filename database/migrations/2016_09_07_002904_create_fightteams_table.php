<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFightteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fightteams', function (Blueprint $table) {
            $table->increments('id');
						$table->date('holded_at');
						$table->string('game_order');
						$table->string('begin_time_set');
						$table->string('begin_time_act');
						$table->string('js');
						$table->string('hv');
						$table->string('team_name');
						
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
        Schema::drop('fightteams');
    }
}
