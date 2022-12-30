<?php namespace Niceweb\Shopping\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNicewebShoppingProducts extends Migration
{
    public function up()
    {
        Schema::create('niceweb_shopping_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('store_id');
            $table->string('sku', 1024);
            $table->string('product', 1024);
            $table->string('description', 1024)->nullable();
            $table->string('short_description', 1024)->nullable();
            $table->boolean('is_visible');
            $table->boolean('is_active');
            $table->integer('category_id');            
            $table->text('guid');
            $table->integer('segment_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('niceweb_shopping_products');
    }
}