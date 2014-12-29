<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->truncate();

		$users = array(
            'username' =>'admin',
            'password' => Hash::make('abc123'),
            'name' => 'Administrador'
		);

		DB::table('users')->insert($users);

		$users = array(
			'username' =>'user',
			'password' => Hash::make('123'),
			'name' => 'Utilizador'
		);

		DB::table('users')->insert($users);
	}

}
