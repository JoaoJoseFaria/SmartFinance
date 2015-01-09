<?php

class Movimento extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function categorias() {
		return $this->belongsTo('Categoria', 'idCat');
	}
}
