<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>分类信息 - Powered by EmpireCMS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
</head>
<body class="channle">
<!-- 页头 -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="top">
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="63%"> 
<!-- 登录 -->
<script>
document.write('<script src="/e/member/login/loginjs.php?t='+Math.random()+'"><'+'/script>');
</script>
</td>
<td align="right">
<a onclick="window.external.addFavorite(location.href,document.title)" href="#ecms">加入收藏</a> | <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('/')" href="#ecms">设为首页</a> | <a href="/e/member/cp/">会员中心</a> | <a href="/e/DoInfo/">我要投稿</a> | <a href="/e/web/?type=rss2&classid=9" target="_blank">RSS<img src="/skin/default/images/rss.gif" border="0" hspace="2" /></a>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
<tr valign="middle">
<td width="240" align="center"><a href="/"><img src="/skin/default/images/logo.gif" width="200" height="65" border="0" /></a></td>
<td align="center"><a href="http://www.phome.net/OpenSource/" target="_blank"><img src="/skin/default/images/opensource.gif" width="100%" height="70" border="0" /></a></td>
</tr>
</table>
<!-- 导航tab选项卡 -->
<table width="920" border="0" align="center" cellpadding="0" cellspacing="0" class="nav">
  <tr> 
    <td class="nav_global"><ul>
        <li class="curr" id="tabnav_btn_0" onmouseover="tabit(this)"><a href="/">首页</a></li>
        <? @sys_ShowClassByTemp('0',12,0,0);?> </ul></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="news_list"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>您当前的位置：<a href="/">首页</a>&nbsp;>&nbsp;<a href="/info/">分类信息</a></td>
</tr>
</table>
<? @sys_ForSonclassData('selfinfo',5,38,0,0,7,0,0);?></td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>分类信息搜索</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><form action="/e/search/index.php" method="post" name="searchform" id="searchform">
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="6">
<input type="hidden" name="tbname" value="info">
<input type="hidden" name="tempid" value="1">
<tr>
<td><input name="keyboard" type="text" class="inputText" id="keyboard" size="18" />
<select name="show">
<option value="title,smalltext,myarea" selected="selected">不限</option>
<option value="title">信息标题</option>
<option value="smalltext">信息内容</option>
<option value="myarea">所在地</option>
</select></td>
</tr>
<tr>
<td><select name="classid">
<option value='9'>所有分类</option>
<option value='10'>|-房屋信息</option>
<option value='11' >&nbsp;&nbsp;|-房屋求租</option>
<option value='12' >&nbsp;&nbsp;|-房屋出租</option>
<option value='13' >&nbsp;&nbsp;|-房屋求购</option>
<option value='14' >&nbsp;&nbsp;|-房屋出售</option>
<option value='15' >&nbsp;&nbsp;|-办公用房</option>
<option value='16' >&nbsp;&nbsp;|-旺铺门面</option>
<option value='17'>|-跳蚤市场</option>
<option value='18' >&nbsp;&nbsp;|-电脑配件</option>
<option value='19' >&nbsp;&nbsp;|-电器数码</option>
<option value='20' >&nbsp;&nbsp;|-通讯产品</option>
<option value='21' >&nbsp;&nbsp;|-居家用品</option>
<option value='22'>|-同城生活</option>
<option value='23' >&nbsp;&nbsp;|-本地新闻</option>
<option value='24' >&nbsp;&nbsp;|-购物打折</option>
<option value='25' >&nbsp;&nbsp;|-旅游活动</option>
<option value='26' >&nbsp;&nbsp;|-便民告示</option>
<option value='27'>|-求职招聘</option>
<option value='28' >&nbsp;&nbsp;|-工程技术</option>
<option value='29' >&nbsp;&nbsp;|-财务会计</option>
<option value='30' >&nbsp;&nbsp;|-餐饮行业</option>
<option value='31' >&nbsp;&nbsp;|-经营管理</option>
</select>
<input name="Submit2" type="image" value="搜索" src="/skin/default/images/search.gif" />　
[<a href="/e/DoInfo/ChangeClass.php?mid=8" target="_blank">发布信息</a>]</td>
</tr>
</table>
</form></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>地区导航</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
	<tr>
		<td width="33%"><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=东城区">东城区</a></td>
		<td width="33%"><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=西城区">西城区</a></td>
		<td width="33%"><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=通州区">通州区</a></td>
	</tr>
	<tr>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=崇文区">崇文区</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=宣武区">宣武区</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=大兴区">大兴区</a></td>
	</tr>
	<tr>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" /><a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=朝阳区">&nbsp;朝阳区</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=海淀区">海淀区</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=昌平区">昌平区</a></td>
	</tr>
	<tr>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=丰台区">丰台区</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=石景山区">石景山区</a></td>
		<td><img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo.php?classid=9&ph=1&myarea=其它">其它</a></td>
	</tr>
</table></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>分类导航</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><table width="100%" border="0" cellpadding="4" cellspacing="0">
  <tr>
    <td bgcolor="#EEF1F4">&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=10"><strong>房屋信息</strong></a></td>
  </tr> 
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=11">房屋求租</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=12">房屋出租</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=15">办公用房</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=13">房屋求购</a></td>
    <td><a href="/e/action/ListInfo/?classid=14">房屋出售</a></td>
  		<td><a href="/e/action/ListInfo/?classid=16">旺铺门面</a></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="4" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=17"><strong>跳蚤市场</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=18">电脑配件</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=19">电器数码</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=21">居家用品</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=20">通讯产品</a></td>
    <td><a href="/e/action/ListInfo/?classid=21"></a></td>
  		<td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=22"><strong>同城生活</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=23">本地新闻</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=24">购物打折</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=26">便民告示</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=25">旅游活动</a></td>
    <td>&nbsp;</td>
  		<td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/e/action/ListInfo/?classid=27"><strong>求职招聘</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/e/action/ListInfo/?classid=28">工程技术</a></td>
    <td width="33%"><a href="/e/action/ListInfo/?classid=29">财务会计</a></td>
  		<td width="33%"><a href="/e/action/ListInfo/?classid=31">经营管理</a></td>
  </tr>
  <tr>
    <td><a href="/e/action/ListInfo/?classid=30">餐饮行业</a></td>
    <td><a href="/e/action/ListInfo/?classid=31"></a></td>
  		<td>&nbsp;</td>
  </tr>
</table></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>热门点击</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ol class="rank">
<? @sys_GetEcmsInfo('selfinfo',10,40,0,1,10,0);?> 
</ol></td>
</tr>
</table></td>
</tr>
</table>
<!-- 页脚 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="center" class="search">
<form action="/e/search/index.php" method="post" name="searchform" id="searchform">
<table border="0" cellspacing="6" cellpadding="0">
<tr>
<td><strong>站内搜索：</strong>
<input name="keyboard" type="text" size="32" id="keyboard" class="inputText" />
<input type="hidden" name="show" value="title" />
<input type="hidden" name="tempid" value="1" />
<select name="tbname">
<option value="news">新闻</option>
<option value="download">下载</option>
<option value="photo">图库</option>
<option value="flash">FLASH</option>
<option value="movie">电影</option>
<option value="shop">商品</option>
<option value="article">文章</option>
<option value="info">分类信息</option>
</select>
</td>
<td><input type="image" class="inputSub" src="/skin/default/images/search.gif" />
</td>
<td><a href="/search/" target="_blank">高级搜索</a></td>
</tr>
</table>
</form>
</td>
</tr>
<tr>
<td>
	<table width="100%" border="0" cellpadding="0" cellspacing="4" class="copyright">
        <tr> 
          <td align="center"><a href="/">网站首页</a> | <a href="#">关于我们</a> 
            | <a href="#">服务条款</a> | <a href="#">广告服务</a> | <a href="#">联系我们</a> 
            | <a href="#">网站地图</a> | <a href="#">免责声明</a> | <a href="/e/wap/" target="_blank">WAP</a></td>
        </tr>
        <tr> 
          <td align="center">Powered by <strong><a href="http://www.phome.net" target="_blank">EmpireCMS</a></strong> 
            <strong><font color="#FF9900">7.2</font></strong>&nbsp; &copy; 2002-2015 
            <a href="http://www.digod.com" target="_blank">EmpireSoft Inc.</a></td>
        </tr>
	</table>
</td>
</tr>
</table>
</body>
</html>