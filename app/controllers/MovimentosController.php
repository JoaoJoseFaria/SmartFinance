<?php

class MovimentosController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$movimentos = Movimento::with('categorias')->get();
		return View::make('movimentos.index', array('movimentos' => $movimentos));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$movimentos = Movimento::with('categorias')->get();
		$movimento = Movimento::findOrFail($id);
		$listCategorias = Categoria::lists('name', 'id');
		return View::make('movimentos.edit', array('movimentos' => $movimentos, 'movimento' => $movimento, 'listCategorias' => $listCategorias));
	}

	/**
	 * Update/Destroy the specified resource in storage.
	 *
	 * @return Response
	 */
	public function update_destroy()
	{
		if ( Input::get('action') === 'Gravar' )
		{
			$movimento = Movimento::findOrFail(Input::get('id'));
			$movimento->date = Input::get('date');
			$movimento->idCat = Input::get('idCat');
			$movimento->value = Input::get('value');
			$movimento->save();
		}
		if ( Input::get('action') === 'Eliminar' )
		{
			$movimento = Movimento::findOrFail(Input::get('id'));
			$movimento->delete();
		}
		return Redirect::to('movimentos');
	}

}
