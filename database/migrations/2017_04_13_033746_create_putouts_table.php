<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePutoutsTable extends Migration
{
    /**
     * Run the migrations.
     * out 出局 一, 1,二,2,三,3,雙殺打D 1, D,  D, 1, 三殺打 T 
     * @return void
     */
    public function up()
    {
        Schema::create('putouts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_id');
            $table->integer('inning_id'); //上下半局
            $table->string('out_no'); //出局數
            $table->string('attacker_id'); //打者
            $table->string('attacker_id_2'); //打者，雙殺時用，平常空白
            $table->string('attacker_id_3'); //打者，三殺時用，平常空白
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
        Schema::dropIfExists('putouts');
    }
}
