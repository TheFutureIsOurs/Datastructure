<?php
/**
 * 首页
 * @author liudaiming
 * @version 2015-01-06
 *
 */
class PublicController extends Controller{
	/**
	 * 首页，欢迎页
	 */
	public function actionIndex(){
		$this->render('index');
	}
	/**
	 * 设置
	 */
	public function actionSetting(){
		$this->render('setting');
	}
	/**
	 * 模块
	 */
	public function actionModule(){
		$this->render('module');
	}
}