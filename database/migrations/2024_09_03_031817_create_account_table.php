<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTable extends Migration
{
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->string('username', 45)->primary();
            $table->string('password', 250);
            $table->string('name', 45);
            $table->string('role', 45);
        });
    }

    public function down()
    {
        Schema::dropIfExists('account');
    }
};

