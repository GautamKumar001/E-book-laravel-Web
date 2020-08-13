<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('info');
            $table->string('lang');
            $table->string('image');
            $table->string('imageurl')->nullable();
            $table->string('key');
            $table->string('keyurl')->nullable();
            $table->string('cheat');
            $table->string('cheaturl')->nullable();
            $table->string('paradigm');
            $table->string('design');
            $table->string('first');
            $table->string('family');
            $table->string('extension');
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
        Schema::dropIfExists('infos');
    }
}
