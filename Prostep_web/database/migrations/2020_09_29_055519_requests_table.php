<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('mail',50);
            $table->integer('request_tel');
            $table->string('industry',50);
            $table->integer('page');
            $table->string('function',255);
            $table->string('request_contents',1000);
            $table->integer('product_id');
            $table->integer('price');
            $table->dateTime('delivery_date');
            $table->integer('maintenance');
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
        Schema::dropIfExists('requests');
    }
}
