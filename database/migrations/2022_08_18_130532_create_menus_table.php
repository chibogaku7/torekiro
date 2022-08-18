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
        Schema::create('menus', function (Blueprint $table) {
            $table->string('menu_id',30)->unique();
            $table->string('menu_name',30);
            $table->string('part_id',30);
            $table->foreign('part_id',30)->references('part_id')->on('parts');;
            $table->enum('unit', ['kg', 'km/h']); 
            $table->enum('length', ['回', '分']); 
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
        Schema::dropIfExists('menus');
    }
};
