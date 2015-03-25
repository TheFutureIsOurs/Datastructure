<?php
class user extends CActiveRecord{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function tableName()
	{
		return '{{user}}';
	}
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
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
				'posts' => array(self::HAS_MANY, 'post', 'author_id'),
		);
	}
	public function login(){
		
	}
	public function validatePassword($password)
	{
		return CPasswordHelper::verifyPassword($password,$this->password);
	}
	public function createPassword($password)
	{
		return CPasswordHelper::hashPassword($password);
	}
}
