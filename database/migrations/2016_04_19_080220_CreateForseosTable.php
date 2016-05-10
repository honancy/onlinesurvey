<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForseosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forseos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staffid')->unique();
            $table->string('authornames');
            $table->string('forarea');
            $table->string('seo');
            $table->string('comments');
            $table->rememberToken();
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
        Schema::drop('forseos');
    }
}
