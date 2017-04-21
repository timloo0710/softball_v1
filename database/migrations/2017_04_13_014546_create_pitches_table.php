<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePitchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pitches', function (Blueprint $table) {
            $table->increments('id');
			$table->string('defender_id'); //投手也是守備人員
			$table->string('strike'); //G 好 B 壞    1好，2好，
			$table->string('position'); //位置 上 中 下 左 右
			$table->integer('x')->nullable();
			$table->integer('y')->nullable();
			$table->string('kind'); //球種
			$table->string('velocity'); //速度感覺
			$table->integer('speed')->nullable(); //數字
            $table->string('condition');
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
        Schema::dropIfExists('pitches');
    }
}
