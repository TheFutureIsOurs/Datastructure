<div class="subnav">
    <div class="content-menu ib-a blue line-x">
            </div>
</div>
<style type="text/css">
	html{_overflow-y:scroll}
</style><script type="text/javascript">
  $(document).ready(function() {
	  /*
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#realname").formValidator({onshow:"请输入真实姓名",onfocus:"真实姓名应该为2-20位之间"}).inputValidator({min:2,max:20,onerror:"真实姓名应该为2-20位之间"})
	$("#email").formValidator({onshow:"请输入E-mail",onfocus:"请输入E-mail",oncorrect:"E-mail格式正确"}).regexValidator({regexp:"email",datatype:"enum",onerror:"E-mail格式错误"}).ajaxValidator({
	    type : "get",
		url : "",
		data :"m=admin&amp;c=admin_manage&amp;a=public_email_ajx",
		datatype : "html",
		async:'false',
		success : function(data){	
            if( data == "1" )
			{
                return true;
			}
            else
			{
                return false;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "该邮箱已经存在",
		onwait : "请稍候..."
	}).defaultPassed();
		*/
  })
</script>
<div class="pad_10">
<div class="common-form">
<form id="myform" method="post" action="?m=admin&amp;c=admin_manage&amp;a=public_edit_info" name="myform">
<input type="hidden" value="1" name="info[userid]">
<input type="hidden" value="admin" name="info[username]">
<table width="100%" class="table_form contentWrap">
<tbody><tr>
<td width="80">用户名</td> 
<td>admin</td>
</tr>

<tr>
<td width="80">最后登录时间</td> 
<td>2015-01-06 11:00:09</td>
</tr>

<tr>
<td width="80">最后登录IP</td> 
<td>10.0.2.2</td>
</tr>

<tr>
<td>真实姓名</td>
<td>
<input type="text" value="" size="30" class="input-text" id="realname" name="info[realname]">
<div id="realnameTip" class="onShow">请输入真实姓名</div></td>
</tr>
<tr>
<td>E-mail</td>
<td>
<input type="text" value="695017449@qq.com" size="40" class="input-text" id="email" name="info[email]">
<div id="emailTip" class="onCorrect">E-mail格式正确</div></td>
</tr>
<tr>
<td>Language</td>
<td>
<select name="info[lang]">
                                                                                                        <option value="zh-cn">中文 - Chinese simplified</option>                                                <option value="en">English</option>                                                                                                                                                                                                                                                                                                                
    </select>
</td>
</tr>

</tbody></table>

    <div class="bk15"></div>
    <input type="submit" id="dosubmit" class="button" value="提交" name="dosubmit">
<input type="hidden" name="pc_hash" value="wVWqbR"></form>
</div>
</div>


