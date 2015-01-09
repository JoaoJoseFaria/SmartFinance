<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMovimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movimentos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('idUser')
				->nullable()
				->unsigned();
			$table->integer('idCat')
				->nullable()
				->unsigned()
				->foreign('idCat')
				->references('id')
				->on('categorias')
				->onDelete('CASCADE');;
			$table->decimal('value');
			$table->string('image');
			$table->date('date');
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
		Schema::drop('movimentos');
	}

}
