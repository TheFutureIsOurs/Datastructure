<?php
class UserController extends Controller{
	
	public function actionLogin(){
		$username = 'ldm';
		$password = 'abc123456';
		$identify = new UserIdentity($username, $password);
		$check = $identify->authenticate();
		if($check){
			Yii::app()->user->login($identify);
			var_dump(Yii::app()->user->returnUrl);
		}else{
			$msg = "用户名或密码错误";
		}
	}
	public function actionPassword(){
		$password = 'abc123456';
		$user = user::model()->createPassword($password);
		var_dump($user);
	}
	public function actionTest(){
		var_dump(Yii::app()->user->getReturnUrl());
	}
	public function actionSecurity(){
		$security = Yii::app()->securityManager;
		$data = $security->hashData('abc123456');
		var_dump($data);
	}
	public function actionEditinfo(){
		$this->render('editinfo');
	}
	/**
	 * 
	 */
	public function actionEditpwd(){
		$this->render('editpwd');
	}
	public function missingAction($actionID){
		var_dump($actionID);
	}
}