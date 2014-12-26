<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->truncate();

		$users = array(
            'username' =>'admin',
            'password' => Hash::make('admin'),
            'name' => 'Administrador'
		);

		DB::table('users')->insert($users);
	}

}
