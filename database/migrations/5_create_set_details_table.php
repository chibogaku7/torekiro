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
        Schema::create('set_details', function (Blueprint $table) {
            $table->increments('set_id');
            $table->string('training_id');
            $table->foreign('training_id')->references('training_id')->on('training_histories');
            $table->integer('repeat',2);
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
