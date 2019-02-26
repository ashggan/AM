<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Technoliges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('technoliges', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('technoliges');
    }
}
