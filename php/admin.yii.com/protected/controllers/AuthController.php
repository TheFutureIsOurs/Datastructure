<?php
/**
 * 认证
 * @author liudaiming
 * @version 2014-12-30
 *
 */
class AuthController extends Controller{
	public $layout='//layouts/column3';
	public function actions()
	{
		return array(
				// captcha action renders the CAPTCHA image displayed on the contact page
				'captcha'=>array(
						'class'=>'CCaptchaAction',
						'backColor'=>0xFFFFFF,
						'width'=>130,
						'height'=>50,
						'minLength'=>'4',
						'maxLength'=>'6'
				),
				
		);
	}
	
	public function actionAuth(){
		$auth = Yii::app()->authManager;
// 		$item = $auth->createAuthItem('chairman',2,"主席");
		/* $item = $auth->createAuthItem('governor',2,"省长");
		$item = $auth->createAuthItem('mayor',2,"市长");
		$item = $auth->createAuthItem('countyhead',2,"县长");
		$item = $auth->createAuthItem('villagehead',2,"村长");
		$item = $auth->createAuthItem('normal',2,"平名"); 
		$item = $auth->createAuthItem('managecountry',1,'管理国家');
		$item = $auth->createAuthItem('mangeprovince',1,'管理省');
		$item = $auth->createAuthItem('managetown',1,'管理市');
		$item = $auth->createAuthItem('managepowiat',1,'管理县');
		$item = $auth->createAuthItem('managevillage',1,'管理村');
		$item = $auth->createAuthItem('manageself',1,'管理自己');
		*/
		/* $item = $auth->addItemChild('chairman','governor');
		$item = $auth->addItemChild('chairman','mayor');
		$item = $auth->addItemChild('chairman','countyhead');
		$item = $auth->addItemChild('chairman','villagehead');
		$item = $auth->addItemChild('chairman','normal'); */
		/* $item = $auth->addItemChild('governor','mayor');
		$item = $auth->addItemChild('governor','countyhead');
		$item = $auth->addItemChild('governor','villagehead');
		$item = $auth->addItemChild('governor','normal');
		
		$item = $auth->addItemChild('countyhead','villagehead');
		$item = $auth->addItemChild('countyhead','normal');
		
		$item = $auth->addItemChild('villagehead','normal'); */
		
		/* $item = $auth->addItemChild('chairman','managecountry');
		$item = $auth->addItemChild('governor','mangeprovince');
		$item = $auth->addItemChild('mayor','managetown');
		$item = $auth->addItemChild('countyhead','managepowiat');
		$item = $auth->addItemChild('villagehead','managevillage');
		$item = $auth->addItemChild('normal','manageself'); */
		
// 		$assign = $auth->assign('chairman',1);
		
		
		$check = $auth->checkAccess('villagehead',1);
// 		$check = $auth->getAuthAssignments(1);
		var_dump($check);
		/*
		$db = Yii::app()->db;
		 $data = array(
				'name'=>'chyairman',
				'type'=>1,
				'description'=>"主席"
		); */
		/* $data = array(
				'name'=>"主席",
				'code'=>'ww',
				'population'=>123
		);
		$result = $db->createCommand()->insert('country',$data);
		var_dump($result); */
		
	}
	public function actionTest1(){
		$endtime = microtime(true);
		var_dump($endtime-START_TIME);
	}
	/**
	 * 登陆验证
	 * @version 2015-01-04
	 */
	public function actionLogin(){
		$model = new LoginForm();
		if(isset($_POST['LoginForm'])){
			$model->attributes=$_POST['LoginForm'];
			if($model->validate()&&$model->login()){
				$this->redirect(Yii::app()->user->returnUrl);
				exit();
			}else{
				$this->render('../public/showmessage',array('message'=>'验证失败','status'=>3,'jumpUrl'=>'?r=auth/login','waitSecond'=>3));
				exit();
			}
// 			$this->render('../public/showmessage',array('message'=>'验证失败','status'=>3,'jumpUrl'=>'auth/login','waitSecond'=>3));
// 			var_dump($this->getAction());
// 			$action = $this->createAction('captcha')->getVerifyCode();
// 			var_dump($model->verifyCode);
// 			->validate($model->verifyCode, false)
		}
		$this->render('login',array('model'=>$model));
	}
	public function actionTest(){
		var_dump(Yii::app()->user->userid);
	}
	/**
	 * 退出
	 * @version 2015-01-06
	 */
	public function actionLogout(){
		
	}
// 	public function 
	
}