<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ThinkPHP管理系统登录</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/style.css" />
<script type="text/javascript" src="__PUBLIC__/Js/Base.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/prototype.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/mootools.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/Ajax/ThinkAjax.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/Form/CheckForm.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/common.js"></script>
 <script language="JavaScript">
<!--
var PUBLIC	 =	 '__PUBLIC__';
ThinkAjax.image = [	 '__PUBLIC__/Images/loading2.gif', '__PUBLIC__/Images/ok.gif','__PUBLIC__/Images/update.gif' ]
ThinkAjax.updateTip	=	'登录中～';
function loginHandle(data,status){
if (status==1)
{
$('result').innerHTML	=	'<span style="color:blue"><img SRC="__PUBLIC__/Images/ok.gif" WIDTH="20" HEIGHT="20" BORDER="0" ALT="" align="absmiddle" > 登录成功！3 秒后跳转～</span>';
$('form1').reset();
window.location = '__URL__';
}
}
function keydown(e){
	var e = e || event;
	if (e.keyCode==13)
	{
	ThinkAjax.sendForm('form1','__URL__/checkLogin/',loginHandle,'result');
	}
}
function fleshVerify(type){ 
//重载验证码
var timenow = new Date().getTime();
if (type)
{
$('verifyImg').src= '__URL__/verify/adv/1/'+timenow;
}else{
$('verifyImg').src= '__URL__/verify/'+timenow;
}

}
//-->
</script>
</head>
<body onLoad="document.login.account.focus()" >
<form method='post' name="login" id="form1" >
<div class="tCenter hMargin">
<table id="checkList" class="login shadow" cellpadding=0 cellspacing=0 >
<tr><td height="5" colspan="2" class="topTd" ></td></tr>
<tr class="row" ><Th colspan="2" class="tCenter space" ><img src="__PUBLIC__/Images/preview_f2.png" width="32" height="32" border="0" alt="" align="absmiddle">管理系统登录</th></tr>
<tr><td height="5" colspan="2" class="topTd" ></td></tr>
<tr class="row" ><td colspan="2" class="tCenter"><div id="result" class="result none"></div></td></tr>
<tr class="row" ><td class="tRight" width="25%">帐 号：</td><td><input type="text" class="medium bLeftRequire" check="Require" warning="请输入帐号" name="account"></td></tr>
<tr class="row" ><td class="tRight">密 码：</td><td><input type="password" class="medium bLeftRequire" check="Require" warning="请输入密码" name="password"></td></tr>
<tr class="row" ><td class="tRight">验证码：</td><td><input type="text" onKeyDown="keydown(event)" class="small bLeftRequire" check="Require" warning="请输入验证码" name="verify"> <img id="verifyImg" SRC="__URL__/verify/" onClick="fleshVerify()" BORDER="0" ALT="点击刷新验证码" style="cursor:pointer" align="absmiddle"></td></tr>
<tr class="row" ><td class="tCenter" align="justify" colspan="2">
<input type="hidden" name="ajax" value="1">
<input type="button" value="登 录" onClick="ThinkAjax.sendForm('form1','__URL__/checkLogin/',loginHandle,'result')" class="submit medium hMargin">
</td></tr>
<tr><td height="5" colspan="2" class="bottomTd" ></td></tr>
</table>
<div class="result">测试账号(用户名/密码) 管理员：admin/admin 领导：leader/leader 员工：member/member 演示：demo/demo</div>
</div>
</form>
</body>
</html>