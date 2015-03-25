<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="content-type">
<meta content="IE=Edge" http-equiv="X-UA-Compatible">
<title>后台登录</title>
<style type="text/css">
	div{overflow:hidden; *display:inline-block;}div{*display:block;}
	.login_box{background:url(<?php echo Yii::app()->request->baseUrl; ?>/images/admin_img/login_bg.jpg) no-repeat; width:602px; height:416px; overflow:hidden; position:absolute; left:50%; top:50%; margin-left:-301px; margin-top:-208px;}
	.login_iptbox{bottom:90px;_bottom:72px;color:#FFFFFF;font-size:12px;height:30px;left:50%;
margin-left:-280px;position:absolute;width:560px; overflow:visible;}
	.login_iptbox .ipt{height:24px; width:110px; margin-right:22px; color:#fff; background:url(<?php echo Yii::app()->request->baseUrl; ?>/images/admin_img/ipt_bg.jpg) repeat-x; *line-height:24px; border:none; color:#000; overflow:hidden;}
		.login_iptbox label{ *position:relative; *top:-6px;}
	.login_iptbox .ipt_reg{margin-left:12px;width:46px; margin-right:16px; background:url(<?php echo Yii::app()->request->baseUrl; ?>/images/admin_img/ipt_bg.jpg) repeat-x; *overflow:hidden;text-align:left;padding:2px 0 2px 5px;font-size:16px;font-weight:bold;}
	.login_tj_btn{ background:url(<?php echo Yii::app()->request->baseUrl; ?>/images/admin_img/login_dl_btn.jpg) no-repeat 0px 0px; width:52px; height:24px; margin-left:16px; border:none; cursor:pointer; padding:0px; float:right;}
	.yzm{position:absolute; background:url(<?php echo Yii::app()->request->baseUrl; ?>/images/admin_img/login_ts140x89.gif) no-repeat; width:140px; height:89px;right:40px;top:-96px; text-align:center; font-size:12px; display:none;}
	.yzm a:link,.yzm a:visited{color:#036;text-decoration:none;}
	.yzm a:hover{color:#C30;}
	.yzm img{cursor:pointer; margin:4px auto 3px; width:130px; height:50px; border:1px solid #fff;}
	.cr{font-size:12px;font-style:inherit;text-align:center;color:#ccc;width:100%; position:absolute; bottom:58px;}
	.cr a{color:#ccc;text-decoration:none;}
</style>
<script language="JavaScript">
	if(top!=self)
	if(self!=top) top.location=self.location;
</script>
</head>

<body>
<div class="login_box" id="login_bg">
	<div class="login_iptbox">
	<?php 
	$form = $this->beginWidget('CActiveForm',array(
			'id'=>'login-form',
			'enableClientValidation'=>true,
			'focus'=>array($model,'username'),
			'clientOptions' => array(
					'validateOnSubmit' => true,
			),
	));
	?>
	<?php echo $form->label($model,'username'); ?>
	<?php echo $form->textField($model,'username',array('class'=>'ipt')); ?>
	
	<?php echo $form->label($model,'password'); ?>
	<?php echo $form->passwordField($model,'password',array('class'=>'ipt')); ?>
	
	<?php echo $form->label($model,'verifyCode'); ?>
	<?php echo $form->textField($model,'verifyCode',array('onfocus'=>"document.getElementById('yzm').style.display='block'",'class'=>'ipt ipt_reg')); ?>
	
	<div class="yzm" id="yzm">
    <?php $this->widget('CCaptcha',array('showRefreshButton'=>true,'clickableImage'=>true,'buttonLabel'=>'点击更换验证码','imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer'))); ?>
    </div>
    
    <?php echo CHtml::submitButton('',array('class'=>'login_tj_btn')); ?>
	<?php echo $form->errorSummary($model);?>
	<?php $this->endWidget(); ?>
   	 
    </div>
    <div class="cr">CopyRight 2014-2015 闻康（北京）科技有限公司  <a target="_blank" href="http://www.phpcms.cn">PHPCMS TEAM</a> </div>
</div>

</body></html>