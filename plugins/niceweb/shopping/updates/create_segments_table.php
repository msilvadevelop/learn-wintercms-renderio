<?php namespace Niceweb\Shopping\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateSegmentsTable extends Migration
{
    public function up()
    {
        Schema::create('niceweb_shopping_segments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('niceweb_shopping_segments');
    }
}
