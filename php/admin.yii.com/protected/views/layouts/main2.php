<!DOCTYPE html>
<html class="off">
<head>
	<meta content="text/html;charset=utf-8" http-equiv="content-type">
	<meta content="IE=Edge" http-equiv="X-UA-Compatible">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/zh-cn-system.css" />
	<link media="screen" title="styles1" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style/zh-cn-styles1.css" type="text/css" rel="stylesheet">
	<link media="screen" title="styles2" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style/zh-cn-styles2.css" type="text/css" rel="alternate stylesheet">
	<link media="screen" title="styles3" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style/zh-cn-styles3.css" type="text/css" rel="alternate stylesheet">
	<link media="screen" title="styles4" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style/zh-cn-styles4.css" type="text/css" rel="alternate stylesheet">
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/artDialog/artDialog.js?skin=default"></script>
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
        <li class="on top_menu" id="_M10"><a style="outline:none;" hidefocus="true" href="javascript:_M(10,'?r=public/index')">我的面板</a></li>
        <li class="top_menu" id="_M1"><a style="outline:none;" hidefocus="true" href="javascript:_M(1,'?r=public/setting')">设置</a></li>
        <li class="top_menu" id="_M2"><a style="outline:none;" hidefocus="true" href="javascript:_M(2,'?r=public/module')">模块</a></li>
        <li class="top_menu" id="_M4"><a style="outline:none;" hidefocus="true" href="javascript:_M(4,'?r=public/content')">内容</a></li>
        <li class="top_menu" id="_M5"><a style="outline:none;" hidefocus="true" href="javascript:_M(5,'?r=public/member')">用户</a></li>
        <li class="top_menu" id="_M6"><a style="outline:none;" hidefocus="true" href="javascript:_M(6,'?r=public/style')">界面</a></li>
        <li class="top_menu" id="_M7"><a style="outline:none;" hidefocus="true" href="javascript:_M(7,'?r=public/extend')">扩展</a></li>
        <li class="top_menu" id="_M8"><a style="outline:none;" hidefocus="true" href="javascript:_M(8,'?r=public/phpsso')">phpsso</a></li>
        <!-- 
        <li class="tab_web"><a href="javascript:;" class=""><span>默认站点</span></a></li>
         -->
        </ul>
    </div>
</div>
<div id="content" style="width: auto;">
	<div class="col-left left_menu">
    	<div id="Scroll" style="height: 200px;">
    	<div id="leftMain">
    	<h3 class="f14"><span title="展开与收缩" class="switchs cu on"></span>个人信息</h3>
			<ul>
			<li class="sub_menu" id="_MP972"><a style="outline:none;" hidefocus="true" href="javascript:_MP(972,'?r=user/editinfo');">修改个人信息</a></li>
			<li class="sub_menu" id="_MP971"><a style="outline:none;" hidefocus="true" href="javascript:_MP(971,'?r=user/editpwd');">修改密码</a></li>
			</ul>
			<h3 class="f14"><span title="展开与收缩" class="switchs cu on"></span>生成操作</h3>
			<ul>
			<li class="sub_menu" id="_MP1004"><a style="outline:none;" hidefocus="true" href="javascript:_MP(1004,'?r=public/index');">首页</a></li>
			</ul>
    	</div>
    	</div>
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
        	<div style="position:relative; overflow:hidden;" class="content" >
        	 
        	<iframe name="right" id="rightMain" src="?r=public/index" frameborder="false" scrolling="auto" style="border:none; margin-bottom:30px" width="100%" height="auto" allowtransparency="true"></iframe>
        	 
        	 <!-- 
        	<div style="margin-bottom: 30px; height: 181px;overflow:auto;" id="rightMain">
              -->
     <!--            
</div>
 -->
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
window.onload = function (){
	if(!+"\v1" && !document.querySelector) { // for IE6 IE7
	  document.body.onresize = resize;
	} else { 
	  window.onresize = resize;
	}
	function resize() {
		wSize();
		return false;
	}
}
var getWindowSize = function(){
	return ["Height","Width"].map(function(name){
	  return window["inner"+name] ||
		document.compatMode === "CSS1Compat" && document.documentElement[ "client" + name ] || document.body[ "client" + name ]
	});
	}
function wSize(){
	//这是一字符串
	var str=getWindowSize();
	var strs= new Array(); //定义一数组
	strs=str.toString().split(","); //字符分割
	var heights = strs[0]-150,Body = $('body');$('#rightMain').height(heights);   
	//iframe.height = strs[0]-46;
	if(strs[1]<980){
		$('.header').css('width',980+'px');
		$('#content').css('width',980+'px');
		Body.attr('scroll','');
		Body.removeClass('objbody');
	}else{
		$('.header').css('width','auto');
		$('#content').css('width','auto');
		Body.attr('scroll','no');
		Body.addClass('objbody');
	}
	
	var openClose = $("#rightMain").height()+39;
	$('#center_frame').height(openClose+9);
	$("#openClose").height(openClose+30);	
	$("#Scroll").height(openClose-20);
	windowW();
}
wSize();
function windowW(){
	if($('#Scroll').height()<$("#leftMain").height()){
		$(".scroll").show();
	}else{
		$(".scroll").hide();
	}
}
windowW();

function _M(menuid,targetUrl) {
	$("#menuid").val(menuid);
	$("#bigid").val(menuid);
	$("#paneladd").html('<a class="panel-add" href="javascript:add_panel();"><em>增加</em></a>');
	$("#leftMain").load("?r=menu", {limit: 25}, function(){
	   windowW();
	 });
	//$("#rightMain").attr('src', targetUrl);
	$('.top_menu').removeClass("on");
	$('#_M'+menuid).addClass("on");
	/*
	$.get("?m=admin&c=index&a=public_current_pos&menuid="+menuid, function(data){
		$("#current_pos").html(data);
	});
	*/
	$("#current_pos").html("你好");
	//当点击顶部菜单后，隐藏中间的框架
	$('#display_center_id').css('display','none');
	//显示左侧菜单，当点击顶部时，展开左侧
	$(".left_menu").removeClass("left_menu_on");
	$("#openClose").removeClass("close");
	$("html").removeClass("on");
	$("#openClose").data('clicknum', 0);
	$("#current_pos").data('clicknum', 1);
}
function _MP(menuid,targetUrl) {
	$("#menuid").val(menuid);
	$("#paneladd").html('<a class="panel-add" href="javascript:add_panel();"><em>增加</em></a>');

	//$("#rightMain").attr('src', targetUrl+'&menuid='+menuid+'&pc_hash='+pc_hash);
	$('.sub_menu').removeClass("on fb blue");
	$('#_MP'+menuid).addClass("on fb blue");
	$('#rightMain').attr('src',targetUrl);
	/* $.get("?r=menu/test&menuid="+menuid, function(data){
		$("#current_pos").html(data+'<span id="current_pos_attr"></span>');
	}); */
	$("#current_pos").html('菜单导航<span id="current_pos_attr"></span>');
	$("#current_pos").data('clicknum', 1);
// 	show_help(targetUrl);
}
$(function(){
	//左侧开关
	$("#openClose").click(function(){
		if($(this).data('clicknum')==1) {
			$("html").removeClass("on");
			$(".left_menu").removeClass("left_menu_on");
			$(this).removeClass("close");
			$(this).data('clicknum', 0);
			$(".scroll").show();
		} else {
			$(".left_menu").addClass("left_menu_on");
			$(this).addClass("close");
			$("html").addClass("on");
			$(this).data('clicknum', 1);
			$(".scroll").hide();
		}
		return false;
	});

	
});
</script>
</body>
</html>


