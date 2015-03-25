<?php
class Country extends CActiveRecord{
	public function tableName()
	{
		return 'country';
	}
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
				array('code, name, population', 'required'),
				array('code', 'length','max'=>2),
		);
	}
}