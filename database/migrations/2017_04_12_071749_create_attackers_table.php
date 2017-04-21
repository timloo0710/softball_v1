<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attackers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_id');
            $table->string('hv');  //U1 v D1 h U2 v D2 h U3 v 
            $table->string('hitorder')->nullable(); //棒次 0,1,2,3,4..9, 10, 11, 12,DH, 代打，代跑, 額外登錄的人，秀名字
            $table->string('name'); 				
            $table->string('backno'); 				
           
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
        Schema::dropIfExists('attackers');
    }
}
