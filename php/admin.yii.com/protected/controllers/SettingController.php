<?php
/**
 * 后台设置
 * @author liudaiming
 * @version 2015-01-08
 *
 */
class SettingController extends Controller{
	public function actionItem(){
		$auth = Yii::app()->authManager;
		$item = $auth->createAuthItem('mypanel',1,"我的面板",null,array('sort'=>0));
		$item = $auth->createAuthItem('mypanel',1,"设置");
	}
	
}