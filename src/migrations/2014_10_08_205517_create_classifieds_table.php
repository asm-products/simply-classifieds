<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassifiedsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::up('classifieds', function(Blueprint $table){
                $table->bigIncrements('id');
                $table->timestamps();
                $table->string('title');
                $table->text('description');
                $table->integer('category_id')->unsigned();
                $table->integer('location_id')->unsigned();
            });
            
            Schema::up('prices', function(Blueprint $table){
                $table->increments();
                $table->timestamps();
                $table->string('name');
            });
            
            Schema::up('classifieds_prices', function(Blueprint $table){
                $table->bigIncrements('id');
                $table->timestamps();
                $table->integer('classified_id')->unsigned();
                $table->integer('price_id')->unsigned();
                $table->decimal('price', 10, 2)->nullable();
            });
            
            
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
