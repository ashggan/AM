<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gallery extends Migration
{

    public function up()
    {
        //
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
        });

    }

    public function down()
    {
        //
        Schema::dropIfExists('gallery');
    }
}
