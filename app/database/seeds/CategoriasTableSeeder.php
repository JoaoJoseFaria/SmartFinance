<?php

class CategoriasTableSeeder extends Seeder {

	public function run()
	{
		DB::table('categorias')->truncate();

		$categorias = array(
            'userId' => 1,
            'parentId' => null,
            'name' => 'Alimentação',
            'maxValue' => 300
		);

		DB::table('categorias')->insert($categorias);

        $categorias = array(
            'userId' => 1,
            'parentId' => null,
            'name' => 'Vestuário',
            'maxValue' => 300
        );

        DB::table('categorias')->insert($categorias);

        $categorias = array(
            'userId' => 1,
            'parentId' => null,
            'name' => 'Combustiveis',
            'maxValue' => 300
        );

        DB::table('categorias')->insert($categorias);

        $categorias = array(
            'userId' => 1,
            'parentId' => 1,
            'name' => 'Jantares',
            'maxValue' => 300
        );

        DB::table('categorias')->insert($categorias);

        $categorias = array(
            'userId' => 1,
            'parentId' => 1,
            'name' => 'Supermercados',
            'maxValue' => 300
        );

        DB::table('categorias')->insert($categorias);

        $categorias = array(
            'userId' => 1,
            'parentId' => 5,
            'name' => 'Continente',
            'maxValue' => 300
        );

        DB::table('categorias')->insert($categorias);

        $categorias = array(
            'userId' => 1,
            'parentId' => 5,
            'name' => 'Pingo Doce',
            'maxValue' => 300
        );

        DB::table('categorias')->insert($categorias);

        $categorias = array(
            'userId' => 1,
            'parentId' => null,
            'name' => 'Saude',
            'maxValue' => 500
        );

        DB::table('categorias')->insert($categorias);

        $categorias = array(
            'userId' => 1,
            'parentId' => null,
            'name' => 'Educação',
            'maxValue' => 400
        );

        DB::table('categorias')->insert($categorias);

        $categorias = array(
            'userId' => 1,
            'parentId' => null,
            'name' => 'Lazer',
            'maxValue' => 1500
        );

        DB::table('categorias')->insert($categorias);

        $categorias = array(
            'userId' => 1,
            'parentId' => null,
            'name' => 'Saude',
            'maxValue' => 500
        );

        DB::table('categorias')->insert($categorias);

        $categorias = array(
            'userId' => 2,
            'parentId' => null,
            'name' => 'Educação',
            'maxValue' => 400
        );

        DB::table('categorias')->insert($categorias);

        $categorias = array(
            'userId' => 2,
            'parentId' => null,
            'name' => 'Lazer',
            'maxValue' => 1500
        );

        DB::table('categorias')->insert($categorias);
	}

}
