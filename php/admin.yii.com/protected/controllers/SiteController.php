<?php

class SiteController extends CController
{
	public $layout='//layouts/column4';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	public function actionTest(){
		/* $string = 'hello world';
		$securite = Yii::app()->securityManager;
		$valkey = $securite->getValidationKey();
		$enckey = $securite->getEncryptionKey();
		$ency = $securite->encrypt($string,$enckey);
		$decy = $securite->decrypt($ency,$enckey);
		$hash = $securite->hashData($string,$valkey);
		$validate = $securite->validateData($hash,$valkey);
// 		$manger = new CSecurityManager();
		var_dump($valkey);
		var_dump($enckey);
		var_dump($hash);
		var_dump($validate);
		var_dump($securite->generatePseudoRandomBlock()); */
		/* $storage = Yii::app()->statePersister;
		$data = $storage->load();
		var_dump($data); */
// 		$app = Yii::app();
/* 
		array('select'=>'*', 'from'=>'tbl_user');
		$db=Yii::app()->db;
		var_dump($db);
		 $user = Yii::app()->db->createCommand()
		     ->select('username, password')
		     ->from('tbl_user')
		     ->where('id=:id', array(':id'=>1))
		     ->queryRow(); */
		/* $sql = 'select * from city limit 10';
// 		$sql = array('select'=>'*','from'=>'city','limit'=>'10');
		$db = Yii::app()->db;
		$comand = $db->createCommand($sql);
		$text = $comand->query();
		while ($row = $text->read()){
			var_dump($row);
		} */
// 		$sql = 'select count(*) from city limit 1';
// 		$db = Yii::app()->db;
// 		$comand = $db->createCommand(array('select'=>'*','from'=>'city','limit'=>10));
// 		$query = $comand->query();
// 		$column = $query->getColumnCount(0);
// 		var_dump($comand);
		
// 		$row = $text->read();
// 		var_dump($row);
		/* $db=Yii::app()->db;
		$scheme = $db->getSchema();
		$table = $scheme->getTables();
		var_dump($table); */
// 		$sql = array('select'=>'*','from'=>'city','where'=>'provinceid=2','limit'=>10);
		/* $provinceid = 2;
		$sql = 'select * from city where provinceid=:provinceid';
		$command = Yii::app()->db->createCommand($sql);
		$command->bindParam(':provinceid',$provinceid,PDO::PARAM_INT);
		$result = $command->queryColumn();
		var_dump($result); */
// 		$command =  Yii::app()->db->createCommand();
// 		$query = $command->buildQuery($sql);
		$command = Yii::app()->db->createCommand();
		$command->select('*')
		->from('city')
		->where('id=:id', array(':id'=>1))
		->rightJoin('country','city.id=country.code');
		$sql = $command->getText();
		var_dump($sql);
// 		->queryRow();
		
		
	}
}