<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defenders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_id');
            $table->string('hv'); // h , v, U1 h, D1 v , U2 h, D2 v 
            $table->string('name'); 				
            $table->string('backno'); 				
            $table->string('pos')->nullable(); //守備位置  換投手 第一任投手 第二任投手 第三任投手 第四任投手 第一任游擊手 第二任游擊手，額外登錄的人，秀名字，換
            
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
        Schema::dropIfExists('defenders');
    }
}
