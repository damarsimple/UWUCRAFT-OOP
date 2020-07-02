<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Itemsdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemsdata', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('seller');
            $table->string('description');
            $table->string('type');
            $table->string('minecraft_item_id');
            $table->string('minecraft_item_shorthand');
            $table->integer('price');
            $table->integer('counter');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemsdata');
    }
}