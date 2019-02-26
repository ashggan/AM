<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projects extends Migration
{
    public function up()
    {
        //
        Schema::create('projects',function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->text('screenshpts');
            $table->text('features');
            $table->text('wraps');
            $table->text('summery');
            $table->string('title');
        });
    }

    public function down()
    {
        //
        Schema::dropIfExists('projects');

    }
}
