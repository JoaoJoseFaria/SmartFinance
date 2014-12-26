<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categorias', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('parentId')->nullable()->unsigned();
			$table->string('name');
			$table->decimal('maxValue');
			$table->timestamps();
		});

		Schema::table('categorias', function(Blueprint $table) {
			$table->foreign('parentId')->references('id')->on('categorias')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categorias');
	}

}
