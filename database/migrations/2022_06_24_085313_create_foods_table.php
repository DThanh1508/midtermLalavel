<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cate_id');
            $table->foreign('cate_id')->references('id')->
            on('category') ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('fruitName');
            $table->string('oldPrice');
            $table->string('newPrice');
            $table->date('produced_on');
            $table->timestamps();
            $table->text('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
};