<?php

class MovimentosTableSeeder extends Seeder {

	public function run()
	{
		DB::table('movimentos')->truncate();

		$movimentos = array(
			'idUser' => 1,
			'idCat' => 1,
			'value' => 100,
			'image' => '/img/user1/1.jpg',
			'date' => '2015/01/01'
		);

		DB::table('movimentos')->insert($movimentos);

		$movimentos = array(
			'idUser' => 1,
			'idCat' => 1,
			'value' => 200,
			'image' => '/img/user1/2.jpg',
			'date' => '2015/01/05'
		);

		DB::table('movimentos')->insert($movimentos);

		$movimentos = array(
			'idUser' => 1,
			'idCat' => 3,
			'value' => 100,
			'image' => '/img/user1/3.jpg',
			'date' => '2015/01/01'
		);

		DB::table('movimentos')->insert($movimentos);

		$movimentos = array(
			'idUser' => 1,
			'idCat' => 3,
			'value' => 100,
			'image' => '/img/user1/4.jpg',
			'date' => '2015/02/01'
		);

		DB::table('movimentos')->insert($movimentos);

		$movimentos = array(
			'idUser' => 1,
			'idCat' => 5,
			'value' => 100,
			'image' => '/img/user1/5.jpg',
			'date' => '2015/01/01'
		);

		DB::table('movimentos')->insert($movimentos);

		$movimentos = array(
			'idUser' => 1,
			'idCat' => 6,
			'value' => 100,
			'image' => '/img/user1/6.jpg',
			'date' => '2015/02/01'
		);

		DB::table('movimentos')->insert($movimentos);

		$movimentos = array(
			'idUser' => 1,
			'idCat' => 2,
			'value' => 225,
			'image' => '/img/user1/2.jpg',
			'date' => '2015/02/01'
		);

		DB::table('movimentos')->insert($movimentos);

		$movimentos = array(
			'idUser' => 1,
			'idCat' => 6,
			'value' => 123,
			'image' => '/img/user1/6.jpg',
			'date' => '2015/02/01'
		);

		DB::table('movimentos')->insert($movimentos);

		$movimentos = array(
			'idUser' => 1,
			'idCat' => 8,
			'value' => 225,
			'image' => '/img/user1/3.jpg',
			'date' => '2015/02/01'
		);

		DB::table('movimentos')->insert($movimentos);

		$movimentos = array(
			'idUser' => 1,
			'idCat' => 9,
			'value' => 225,
			'image' => '/img/user1/4.jpg',
			'date' => '2015/02/01'
		);

		DB::table('movimentos')->insert($movimentos);

		$movimentos = array(
			'idUser' => 1,
			'idCat' => 10,
			'value' => 321,
			'image' => '/img/user1/5.jpg',
			'date' => '2015/02/01'
		);

		DB::table('movimentos')->insert($movimentos);

		$movimentos = array(
			'idUser' => 1,
			'idCat' => 11,
			'value' => 321,
			'image' => '/img/user1/5.jpg',
			'date' => '2015/02/01'
		);

		DB::table('movimentos')->insert($movimentos);

		$movimentos = array(
			'idUser' => 2,
			'idCat' => 12,
			'value' => 321,
			'image' => '/img/user1/5.jpg',
			'date' => '2015/02/01'
		);

		DB::table('movimentos')->insert($movimentos);

		$movimentos = array(
			'idUser' => 2,
			'idCat' => 13,
			'value' => 31,
			'image' => '/img/user1/5.jpg',
			'date' => '2015/02/01'
		);

		DB::table('movimentos')->insert($movimentos);
	}

}
