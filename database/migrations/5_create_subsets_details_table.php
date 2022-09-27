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
        Schema::create('subsets', function (Blueprint $table) {
            $table->increments('set_id')->unique();
            $table->integer('training_id')->unsigned();
            $table->foreign('training_id')->references('training_id')->on('sets');
            $table->integer('repeat');
            $table->decimal('strength',5,2);
            $table->decimal('times',5,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_details');
    }
};
