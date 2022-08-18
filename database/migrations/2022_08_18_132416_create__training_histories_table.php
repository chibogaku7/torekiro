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
        Schema::create('TrainingHistories', function (Blueprint $table) {
            $table->increments('training_id')->unique();
            $table->string('user_id',30);            
            $table->foreign('user_id',30)->references('user_id')->on('user');
            $table->string('menu_id',30);
            $table->foreign('menu_id',30)->references('menu_id')->on('menus');
            $table->decimal('unit_record', 5, 2);
            $table->decimal('length_record', 5, 2);
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
        Schema::dropIfExists('TrainingHistories');
    }
};
