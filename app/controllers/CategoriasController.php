<?php


class CategoriasController extends BaseController {


	/*
	 * Lista as categorias de topo
	 * return HTML com listagem
     */
	private function listCat()
	{
		$out='';
		$categorias = Categoria::all();
		foreach ($categorias as $categoria)
		{
			if($categoria->parentId == NULL)
			{
				$out .= '<ul>';
				$out .= '<li><a href="/categorias/' . $categoria->id . '">' . $categoria->name . '</a></li>';
				$out .= $this->listCatRec($categorias, $categoria->id);
				$out .= '</ul>';
			}
		}
		return $out;
	}

	/*
	 * Lista as categorias intermédias recursivamente
	 * return HTML com listagem
	 */
	private function listCatRec($categorias, $id)
	{
		$out = '';
		foreach ($categorias as $categoria)
		{
			$out .= '<ul>';
			if($categoria->parentId==$id)
			{
				$out .= '<li><a href="/categorias/' . $categoria->id . '">' . $categoria->name . '</a></li>';
				$out .= $this->listCatRec($categorias, $categoria->id);
			}
			$out .= '</ul>';
		}
		return $out;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categorias = $this->listCat();
		$listCategorias = Categoria::lists('name', 'id');
		array_unshift($listCategorias, 'Topo');
        return View::make('categorias.create', array('categorias'=>$categorias, 'listCategorias'=>$listCategorias));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Input::get('parentId')==0)
		{
			$input = new Categoria();
			$input->name=Input::get('name');
			$input->parentId=NULL;
			$input->maxValue=Input::get('maxValue');
			$input->save();
			return Redirect::to('categorias');
		}
		$input = Input::all();
		Categoria::create($input);
		return Redirect::to('categorias');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$categorias = $this->listCat();
		$listCategorias = Categoria::lists('name', 'id');
		$categoria = Categoria::findOrFail($id);
		return View::make('categorias.show', array('categorias'=>$categorias, 'listCategorias'=>$listCategorias, 'categoria'=>$categoria));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update_destroy()
	{
		if ( Input::get('action') === 'Gravar' )
		{
			$categoria = Categoria::findOrFail(Input::get('id'));
			$categoria->name = Input::get('name');
			$categoria->parentId = Input::get('parentId');
			$categoria->maxValue = Input::get('maxValue');
			$categoria->save();
		}
		if ( Input::get('action') === 'Eliminar' )
		{
			$categoria = Categoria::findOrFail(Input::get('id'));
			$categoria->delete();
		}
		return Redirect::to('categorias');
	}

}
