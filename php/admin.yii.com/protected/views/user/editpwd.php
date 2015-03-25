<div class="subnav">
    <div class="content-menu ib-a blue line-x">
            </div>
</div>
<style type="text/css">
	html{_overflow-y:scroll}
</style>

<div class="pad_10">
<div class="common-form">
<form id="myform" method="post" action="" name="myform">
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
    <input type="button" id="dosubmit" class="button" value="提交" name="dosubmit" onclick="setting_role()">
<input type="hidden" name="pc_hash" value="wVWqbR"></form>
</div>
</div>
<script type="text/javascript">
function setting_role(){
// 	window.top.art.dialog({title:'测试弹窗',id:'edit',content:'你好',width:'700',height:'500',lock:true});
	 
	window.top.art.dialog({
		title:'测试弹窗',
		fixed:true,
	    resize: false,
	    lock:true,
	    ok:true,
	    cancelVal: '取消',
	    cancel: true,
    	content:'确定要删除吗,删除后不可恢复?',
    	ok:function(){
    		document.myForm.action='__GROUP__/Ask/batchdeletescheme';
    		document.myForm.submit();
        }
		
});
}
</script>

