<?php
class CountryController extends Controller{
	public function actionTest(){
		$contries = Country::find()->orderBy('name')->all();
		var_dump($contries);
	}
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function actionModel(){
		$country = new  Country();
// 		$validate = $country->getValidators();
		$meta = $country->getMetaData();
		var_dump($meta);
	}
}