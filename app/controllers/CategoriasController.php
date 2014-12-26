<?php


class CategoriasController extends BaseController {

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

	public function create()
	{
		$categorias = $this->listCat();
		$listCategorias = Categoria::lists('name', 'id');
        return View::make('categorias.create', array('categorias'=>$categorias, 'listCategorias'=>$listCategorias));
	}

	public function store()
	{
		$input = Input::all();
		Categoria::create($input);
		return Redirect::to('categorias');
	}

	public function show($id)
	{
		$categorias = $this->listCat();
		$listCategorias = Categoria::lists('name', 'id');
		$categoria = Categoria::find($id);
		return View::make('categorias.show', array('categorias'=>$categorias, 'listCategorias'=>$listCategorias, 'categoria'=>$categoria));
	}


	public function update($id)
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
