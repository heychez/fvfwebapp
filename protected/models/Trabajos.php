<?php 

class Trabajos extends CActiveRecord
{

	public $imagenes;

	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}
}