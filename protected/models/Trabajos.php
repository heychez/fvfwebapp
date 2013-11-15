<?php 

class Trabajos extends CActiveRecord
{

	public $imagenes;
	public $categoria;

	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function rules(){
		return array(
			array('title, body', 'required'),
		);
	}

}