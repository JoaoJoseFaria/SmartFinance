<?php

class Categoria extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function movimentos() {
		return $this->hasMany('Movimento');
	}
}
