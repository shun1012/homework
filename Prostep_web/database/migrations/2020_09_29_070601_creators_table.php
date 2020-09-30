<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('creator_name',100);
            $table->string('katakana',100);
            $table->string('creator_mail',50);
            $table->string('creator_tel',11);
            $table->string('school_name',50);
            $table->string('skill',1000);
            $table->string('product_url',1000);  //サイトURL
            $table->string('creator_contents',1000);
            $table->string('pass',50);
            $table->string('confirm_pass',50);
            $table->string('result',10);
            $table->integer('product_id');
            $table->string('number',10);
            $table->string('review',10);
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
        Schema::dropIfExists('creators');
    }
}
