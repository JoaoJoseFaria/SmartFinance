<?php

class GestaoController extends BaseController {

	/*
	* Lista as categorias de topo
	* return HTML com listagem
	*/
	private function listCat()
	{
		$dados=array(array('Categoria', 'Valor'));
		$categorias = DB::table('categorias')->where('userId', '=', Auth::id())->get();
		foreach ($categorias as $categoria)
		{
			if($categoria->parentId == NULL)
			{
				$soma =  Movimento::where('idUser', '=', Auth::id())->where('idCat', '=', $categoria->id)->sum('value');
				array_push($dados, array($categoria->name, $soma + $this->listCatRec($categorias, $categoria->id)));
			}
		}
		return $dados;
	}

	/*
	 * Lista as categorias intermédias recursivamente
	 * return HTML com listagem
	 */
	private function listCatRec($categorias, $id)
	{
		$soma = 0;
		foreach ($categorias as $categoria)
		{
			if($categoria->parentId==$id)
			{
				$soma = Movimento::where('idUser', '=', Auth::id())->where('idCat', '=', $categoria->id)->sum('value');
				$this->listCatRec($categorias, $categoria->id);
			}
		}
		return $soma;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('gestao', array('dados'=>$this->listCat()));
	}

}
