<?php namespace Niceweb\Shopping\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNicewebShoppingSegments extends Migration
{
    public function up()
    {
        Schema::create('niceweb_shopping_segments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('guid');
            $table->string('segment', 1024);
            $table->boolean('is_visible')->default(1);
            $table->boolean('is_active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('niceweb_shopping_segments');
    }
}
