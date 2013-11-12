<?php 

class Users extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	/*public function tableName()
	{
		return '{{users}}';
	}*/

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email', 'required'),
			array('username, password, email', 'length', 'max'=>128),
			array('profile', 'safe'),
		);
	}

	public function validatePassword($password)
	{
		//return CPasswordHelper::verifyPassword($password,$this->password);
		return $password == $this->password;
	}
}

?>