<?php
/**
 * 菜单选项
 * @author liudaiming
 * @version 2014-10-28
 */
class MenuController extends Controller{
	public $layout='//layouts/column1';
	
	public function actionIndex(){
		$html = <<<EOT
				<h3 class="f14">
				<span class="switchs cu on" title="展开与收缩"></span>贴士管理</h3>
				<ul>
				<li id="_MP972" class="sub_menu">
				<a href="?r=menu/test" hidefocus="true" style="outline:none;">贴士管理</a></li>
				<li id="_MP971" class="sub_menu"><a href="?r=menu/test" hidefocus="true" style="outline:none;">贴士内容管理</a></li>
				</ul>
				<h3 class="f14">
				<span class="switchs cu on" title="展开与收缩"></span>热门管理</h3>
				<ul>
				<li id="_MP1004" class="sub_menu"><a href="?r=menu/test" hidefocus="true" style="outline:none;">热门问题</a></li>
				</ul>
EOT;
		echo $html;
	}
	public function actionTest(){
		$this->render('test');
	}
	public function actionMain(){
		$this->render('../site/index');
	}
}