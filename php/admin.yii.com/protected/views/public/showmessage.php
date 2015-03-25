<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="content-type">
<meta content="IE=Edge" http-equiv="X-UA-Compatible">
<title>跳转提示</title>
<style type="text/css">
#erro_msg_main{margin:50px 0;padding:50px 0 80px;border:1px solid #DEDEDE;text-align:center;background-color:#F8F8F8;}
#erro_msg_main dl{width:522px;margin:0 auto;padding:30px 100px 50px;border:1px solid #EEE;text-align:left;background:#FFF url(<?php echo Yii::app()->request->baseUrl; ?>/images/admin_img/icon_notice.gif) no-repeat scroll 30px 32px;}
#erro_msg_main .icon_error{background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/admin_img/icon_error.gif);}
#erro_msg_main .icon_success{background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/admin_img/icon_success.gif);}
#erro_msg_main .icon_warning{background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/admin_img/icon_notice.gif);}
#erro_msg_main dt{margin-bottom:5px;padding:2px 0 5px;line-height:1.2em;font-size:14px;font-weight:bold;}
#erro_msg_main .icon_warning dt{color:#e46a01;}
</style>
</head>
<body>
<div class="middle">
	<div id="erro_msg_main">
	  <div class="colboxcontent">
	    <dl <?php if($status == '1'){ echo 'class="icon_success"'; }elseif($status == '0') {echo 'class="icon_error"';  }else{echo 'class="icon_warning"';}  ?>>
	      <dt><?php echo  isset($message)?$message:'';?></dt>
	      <dt><?php echo  isset($error)?$error:'';?></dt>
	      <dt>页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo(isset($waitSecond)?$waitSecond:3); ?></b></dt>
		<dt>点击<a href="<?php echo  $jumpUrl; ?>">这里</a>直接跳转</dt>
	    </dl>
	  </div>
	</div>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>