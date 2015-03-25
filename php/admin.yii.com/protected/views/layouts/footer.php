</div>
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
	if(menuid!=8) {
		$("#leftMain").load("?r=menu", {limit: 25}, function(){
		   windowW();
		 });
	} else {
		$("#leftMain").load("?r=menu", {limit: 25}, function(){
		   windowW();
		 });
	}
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