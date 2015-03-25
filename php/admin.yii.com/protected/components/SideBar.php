<?php
/**
 * 侧边栏
 * @author liudaiming
 * @version 2015-01-06
 *
 */
class SideBar extends CWidget{
	public $sideid;
	public $link;
	public function run()
	{
		$this->render('sidebar');
	}
}