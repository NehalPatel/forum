<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('title');
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('threads');
    }
}
