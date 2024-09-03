<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('idpost');
            $table->text('title');
            $table->text('content');
            $table->dateTime('date');
            $table->string('username', 45);
            $table->foreign('username')->references('username')->on('account');
        });
    }

    public function down()
    {
        Schema::dropIfExists('post');
    }
};

