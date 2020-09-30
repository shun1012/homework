<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pleases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('mail',50);
            $table->string('please_tel',11);
            $table->string('industry',50);
            $table->integer('page');
            $table->string('function',255)->nullable();
            $table->string('please_contents',1000)->nullable();
            $table->integer('product_id')->nullable()->unsigned();
            $table->string('price',7)->nullable();
            $table->dateTime('delivery_date')->nullable();
            $table->string('maintenance',3)->nullable();
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
        Schema::dropIfExists('pleases');
    }
}
