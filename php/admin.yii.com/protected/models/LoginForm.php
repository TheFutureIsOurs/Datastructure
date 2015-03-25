<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public $verifyCode;
	public $_identity;


	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username,password,verifyCode','required','message' => Yii::t ('user', '{attribute}不能为空' )),
			// password needs to be authenticated
			array('verifyCode', 'captcha','message'=>Yii::t('code', '验证码错误')),
		);
	}
	public function attributeLabels()
	{
		return array(
				'username'=>'用户名',
				'password'=>'密码',
				'verifyCode'=>'验证码'
		);
	}
	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate()
	{
		if(!$this->hasErrors())
		{
			$identity=new UserIdentity($this->username,$this->password);
			if(!$identity->authenticate()){
				$this->addError('password','用户名或密码错误.');
				return false;
			}
			return true;
				
		}
		return false;
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			Yii::app()->user->login($this->_identity);
			return true;
		}
		else
			return false;
	}
}
