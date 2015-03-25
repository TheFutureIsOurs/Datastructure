<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content="IE=Edge" http-equiv="X-UA-Compatible">
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/zh-cn-system.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dialog.css" />
	<link media="screen" title="styles1" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style/zh-cn-styles1.css" type="text/css" rel="stylesheet">
	<link media="screen" title="styles2" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style/zh-cn-styles2.css" type="text/css" rel="alternate stylesheet">
	<link media="screen" title="styles3" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style/zh-cn-styles3.css" type="text/css" rel="alternate stylesheet">
	<link media="screen" title="styles4" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style/zh-cn-styles4.css" type="text/css" rel="alternate stylesheet">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<style type="text/css">
	.objbody{overflow:hidden}
	
	.btns{background-color:#666;}
	.btns{position: absolute; top:116px; right:30px; z-index:1000; opacity:0.6;}
	.btns2{background-color:rgba(0,0,0,0.5); color:#fff; padding:2px; border-radius:3px; box-shadow:0px 0px 2px #333; padding:0px 6px; border:1px solid #ddd;}
	.btns:hover{opacity:1;}
	.btns h6{padding:4px; border-bottom:1px solid #666; text-shadow: 0px 0px 2px #000;}
	.btns .pd4{ padding-top:4px; border-top:1px solid #999;}
	.pd4 li{border-radius:0px 6spx 0px 6px; margin-top:2px; margin-bottom:3px; padding:2px 0px;}
	.btns .pd4 li span{padding:0px 6px;}
	.pd{padding:4px;}
	.ac{background-color:#333; color:#fff;}
	.hvs{background-color:#555; cursor: pointer;}
	.bg_btn{background: url(<?php echo Yii::app()->request->baseUrl; ?>/images/admin_img/icon2.jpg) no-repeat; width:32px; height:32px;}
	</style>
</head>

<body class="objbody" scroll="no">
<div class="header" style="width: auto;">
	<div class="logo lf"><a target="_blank" href="http://localhost/v9_v9_UTF8/install_package/"><span class="invisible">后台管理系统</span></a></div>
    <div class="rt-col">
    	<div class="tab_style white cut_line text-r"><a onclick="lock_screen()" href="javascript:;"><img src="http://localhost/phpcms_v9_UTF8/install_package/statics/images/icon/lockscreen.png"> 锁屏</a><span>|</span><a target="_blank" href="http://www.phpcms.cn">PHPCMS</a><span>|</span><a target="_blank" href="http://www.phpcms.cn/license/license.php">授权</a><span>|</span><a target="_blank" href="http://bbs.phpcms.cn">支持论坛</a><span>|</span><a target="_blank" href="http://v9.help.phpcms.cn/">帮助？</a>
    <ul id="Skin">
		<li rel="styles1" class="s1 styleswitch"></li>
		<li rel="styles2" class="s2 styleswitch"></li>
		<li rel="styles3" class="s3 styleswitch"></li>
        <li rel="styles4" class="s4 styleswitch"></li>
	</ul>
        </div>
    </div>
    <div class="col-auto">
    	<div class="log white cut_line">您好！admin  [超级管理员]<span>|</span><a href="?m=admin&amp;c=index&amp;a=public_logout">[退出]</a><span>|</span>
    		<a id="site_homepage" target="_blank" href="http://localhost/v9_v9_UTF8/install_package/">站点首页</a><span>|</span>
    		<a target="_blank" href="?m=member">会员中心</a><span>|</span>
    		<a id="site_search" target="_blank" href="?m=search">搜索</a>
    	</div>
        <ul id="top_menu" class="nav white">
        <li class="on top_menu" id="_M10"><a style="outline:none;" hidefocus="true" href="javascript:_M(10,'?m=admin&amp;c=index&amp;a=public_main')">我的面板</a></li><li class="top_menu" id="_M1"><a style="outline:none;" hidefocus="true" href="javascript:_M(1,'?m=admin&amp;c=setting&amp;a=init')">设置</a></li><li class="top_menu" id="_M2"><a style="outline:none;" hidefocus="true" href="javascript:_M(2,'?m=admin&amp;c=module&amp;a=init')">模块</a></li><li class="top_menu" id="_M4"><a style="outline:none;" hidefocus="true" href="javascript:_M(4,'?m=content&amp;c=content&amp;a=init')">内容</a></li><li class="top_menu" id="_M5"><a style="outline:none;" hidefocus="true" href="javascript:_M(5,'?m=member&amp;c=member&amp;a=init')">用户</a></li><li class="top_menu" id="_M6"><a style="outline:none;" hidefocus="true" href="javascript:_M(6,'?m=template&amp;c=style&amp;a=init')">界面</a></li><li class="top_menu" id="_M7"><a style="outline:none;" hidefocus="true" href="javascript:_M(7,'?m=admin&amp;c=extend&amp;a=init_extend')">扩展</a></li><li class="top_menu" id="_M8"><a style="outline:none;" hidefocus="true" href="javascript:_M(8,'?m=admin&amp;c=phpsso&amp;a=menu')">phpsso</a></li>            <li class="tab_web"><a href="javascript:;" class=""><span>默认站点</span></a></li>
        </ul>
    </div>
</div>
<div id="content" style="width: auto;">
	<div class="col-left left_menu">
    	<div id="Scroll" style="height: 200px;"><div id="leftMain"><h3 class="f14"><span title="展开与收缩" class="switchs cu on"></span>个人信息</h3><ul><li class="sub_menu" id="_MP972"><a style="outline:none;" hidefocus="true" href="javascript:_MP(972,'?m=admin&amp;c=admin_manage&amp;a=public_edit_info');">修改个人信息</a></li><li class="sub_menu" id="_MP971"><a style="outline:none;" hidefocus="true" href="javascript:_MP(971,'?m=admin&amp;c=admin_manage&amp;a=public_edit_pwd');">修改密码</a></li></ul><h3 class="f14"><span title="展开与收缩" class="switchs cu on"></span>生成操作</h3><ul><li class="sub_menu" id="_MP1004"><a style="outline:none;" hidefocus="true" href="javascript:_MP(1004,'?m=content&amp;c=create_html&amp;a=public_index');">生成首页</a></li></ul></div></div>
        <a title="展开与关闭" class="open" hidefocus="hidefocus" style="outline-style: none; outline-width: medium; height: 250px;" id="openClose" href="javascript:;"><span class="hidden">展开</span></a>
    </div>
	<div height="100%" style="display:none" id="display_center_id" class="col-1 lf cat-menu">
	<div class="content">
        	<iframe width="100%" height="auto" frameborder="false" allowtransparency="true" style="border: medium none; height: 229px;" scrolling="auto" src="" id="center_frame" name="center_frame"></iframe>
            </div>
    </div>
    <div class="col-auto mr8">
    <div class="crumbs">
    <div class="shortcut cu-span"><a target="right" href="?m=content&amp;c=create_html&amp;a=public_index&amp;pc_hash=Dgkstg"><span>生成首页</span></a><a target="right" href="?m=admin&amp;c=cache_all&amp;a=init&amp;pc_hash=Dgkstg"><span>更新缓存</span></a><a href="javascript:art.dialog({id:'map',iframe:'?m=admin&amp;c=index&amp;a=public_map', title:'后台地图', width:'700', height:'500', lock:true});void(0);"><span>后台地图</span></a></div>
    当前位置：<span id="current_pos"></span></div>
    	<div class="col-1">
        	<div style="position:relative; overflow:hidden" class="content">
                <iframe width="100%" height="auto" frameborder="false" allowtransparency="true" style="border: medium none; margin-bottom: 30px; height: 181px;" scrolling="auto" src="?m=admin&amp;c=index&amp;a=public_main" id="rightMain" name="right"></iframe>
                <div class="fav-nav">
					<div id="panellist">
											</div>
					<div id="paneladd"></div>
					<input type="hidden" value="" id="menuid">
					<input type="hidden" value="" id="bigid">
                    <div class="fav-help" id="help"></div>
				</div>
        	</div>
        </div>
    </div>
</div>
<script type="text/javascript">

		
</script>
</body>
</html>
