<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 12:54:55
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\lang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4905a2f611f4442c1-69940239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f3c2ed3c1aed1f59416b5e2a5694cb78378623d' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\lang.tpl',
      1 => 1356589704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4905a2f611f4442c1-69940239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'langdata' => 0,
    'volist' => 0,
    'total' => 0,
    'pagecount' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f611f745aa9_54712998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f611f745aa9_54712998')) {function content_5a2f611f745aa9_54712998($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>语言包设置</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>其他设置<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=lang">语言包设置</a></p></div>
  <div class="main-cont">

	<h3 class="title">添加语言包</h3>
	<form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=lang&a=saveadd" onsubmit="return checkform();" />
	<table cellpadding='3' cellspacing='3' class='tab'>
	  <tr>
		<td class='hback_1' align="center">备注说明 <span class='f_red'>*</span></td>
		<td class='hback_1' align="center">调用项名 <span class='f_red'>*</span> 由字母,数字,下横线,中横线组成</td>
		<td class='hback_1' align="center">前台显示值 <span class='f_red'></span></td>
		<td class='hback_1' align='center'>保存</td>
	  </tr>
	  <tr>
		<td class='hback' align="center">
		<input type='text' name='langnote' id='langnote' class='input-150' />
		<span class='f_red' id="dlangnote"></span>
		</td>
		<td class='hback' align="center">
		<input type='text' name='langkey' id='langkey' class='input-150' />
		<span class='f_red' id="dlangkey"></span>
		</td>
		<td class='hback' align='center'>
		<input type='text' name='langval' id='langval' class='input-150' />
		<span class='f_red' id="dlangval"></span>
		</td>
		<td class='hback' align='center'><input type="submit" name="btn_save" class='button' value="添加保存" /></td>
	  </tr>
	</table>
	</form>

    <h3 class="title">语言包列表</h3>
	<form action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=lang&a=saveedit" method="post" name="myform" id="myform" style="margin:0">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="10%"><div class="th-gap">选择</div></th>
		<th width="30%"><div class="th-gap">备注说明/调用标签</div></th>
		<th width="25%"><div class="th-gap">前台显示值</div></th>
		<th width="12%"><div class="th-gap">删除</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center">
		<input name="id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" onClick="checkItem(this, 'chkAll')">
		</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['volist']->value['langnote'];?>
 / &lt;!--{$lang.<?php echo $_smarty_tpl->tpl_vars['volist']->value['langkey'];?>
}--&gt;</td>
		<td align="left"><input type="text" name="langval_<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" id="langval_<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['langval'];?>
" class="input-txt" /></td>
		<td align="center">
		
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['issystem']=='1'){?>
		<font color="#999999">删除</font>
		<?php }else{ ?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=lang&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" onClick="{if(confirm('确定要删除吗？一旦删除无法恢复！')){return true;} return false;}" class="icon-del">删除</a>
		<?php }?>

		</td>
	  </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['volist']->_loop) {
?>
      <tr>
	    <td colspan="4" align="center">暂无信息</td>
	  </tr>
	  <?php } ?>
	  <?php if ($_smarty_tpl->tpl_vars['total']->value>0){?>
	  <tr>
		<td align="center"><input name="chkAll" type="checkbox" id="chkAll" onClick="checkAll(this, 'id[]')" value="checkbox"></td>
		<td class="hback" colspan="3"><input class="button" name="btn_del" type="submit" value=" 更 新 " class="button">&nbsp;&nbsp;共[ <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> ]条记录</td>
	  </tr>
	  <?php }?>
	</table>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['pagecount']->value>1){?>
	<table width='95%' border='0' cellspacing='0' cellpadding='0' align='center' style="margin-top:10px;">
	  <tr>
		<td align='center'><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</td>
	  </tr>
	</table>
	<?php }?>
  </div>
</div>
<?php }?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_footer'), null, 0);?>
</body>
</html>
<script type="text/javascript">
function checkform() {
	var t = "";
	var v = "";

	t = "langnote";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("备注说明不能为空", t);
		return false;
	}

	t = "langkey";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("调用项名不能为空", t);
		return false;
	}

	return true;
}
</script>
<?php }} ?>