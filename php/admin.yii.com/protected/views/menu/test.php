<div class="" style="display: none; position: absolute;"><div class="aui_outer"><table class="aui_border"><tbody><tr><td class="aui_nw"></td><td class="aui_n"></td><td class="aui_ne"></td></tr><tr><td class="aui_w"></td><td class="aui_c"><div class="aui_inner"><table class="aui_dialog"><tbody><tr><td colspan="2" class="aui_header"><div class="aui_titleBar"><div class="aui_title" style="cursor: move; display: block;"></div><a class="aui_close" href="javascript:/*artDialog*/;" style="display: block;">×</a></div></td></tr><tr><td class="aui_icon" style="display: none;"><div class="aui_iconBg" style="background: none;"></div></td><td class="aui_main" style="width: auto; height: auto;"><div class="aui_content" style="padding: 20px 25px;"></div></td></tr><tr><td colspan="2" class="aui_footer"><div class="aui_buttons" style="display: none;"></div></td></tr></tbody></table></div></td><td class="aui_e"></td></tr><tr><td class="aui_sw"></td><td class="aui_s"></td><td class="aui_se" style="cursor: se-resize;"></td></tr></tbody></table></div></div>
<div class="subnav">
    <div class="content-menu ib-a blue line-x">
    <a class="add fb" href="javascript:window.top.art.dialog({id:'add',iframe:'?m=admin&c=site&a=add', title:'添加站点', width:'700', height:'500', lock:true}, function(){var d = window.top.art.dialog({id:'add'}).data.iframe;var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'add'}).close()});void(0);"><em>添加站点</em></a>　    <a href="javascript:;" class="on"><em>站点管理</em></a>    </div>
</div>
<style type="text/css">
	html{_overflow-y:scroll}
</style><div class="pad_10">
<div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
		<tr>
		<th width="80">Siteid</th>
		<th>站点名</th>
		<th>站点目录</th>
		<th>站点域名</th>
		<th align="center">域名绑定目录</th>
		<th width="150">管理操作</th>
		</tr>
        </thead>
        <tbody>
<tr>
<td width="80" align="center">1</td>
<td align="center">默认站点</td>
<td align="center"></td>
<td align="center">http://localhost/v9_v9_UTF8/install_package/</td>
<td align="center">/</td>
<td align="center"><a href="javascript:edit(1, '默认站点')">修改</a> | 
<font color="#cccccc">删除</font></td>
</tr>
</tbody>
</table>
</div>
</div>
<div id="pages"></div>
<script type="text/javascript">
<!--
function edit(id, name) {
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({title:'编辑站点《'+name+'》',id:'edit',iframe:'?m=admin&c=site&a=edit&siteid='+id,width:'700',height:'500'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;d.document.getElementById('dosubmit').click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}
//-->
</script>
