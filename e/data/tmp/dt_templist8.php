<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[!--pagetitle--] - Powered by EmpireCMS</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="[!--news.url--]skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="[!--news.url--]skin/default/js/tabs.js"></script>
</head>
<body class="listpage">
<!-- 页头 -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="top">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="63%">
<!-- 登录 -->
<script>
document.write('<script src="[!--news.url--]e/member/login/loginjs.php?t='+Math.random()+'"><'+'/script>');
</script>
</td>
<td align="right">
<a onclick="window.external.addFavorite(location.href,document.title)" href="#ecms">加入收藏</a> | <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('[!--news.url--]')" href="#ecms">设为首页</a> | <a href="[!--news.url--]e/member/cp/">会员中心</a> | <a href="[!--news.url--]e/DoInfo/">我要投稿</a> | <a href="[!--news.url--]e/web/?type=rss2" target="_blank">RSS<img src="[!--news.url--]skin/default/images/rss.gif" border="0" hspace="2" /></a>
</td>
</tr>
</table></td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
<tr valign="middle">
<td width="240" align="center"><a href="[!--news.url--]"><img src="[!--news.url--]skin/default/images/logo.gif" width="200" height="65" border="0" /></a></td>
<td align="center"><a href="http://www.phome.net/OpenSource/" target="_blank"><img src="[!--news.url--]skin/default/images/opensource.gif" width="100%" height="70" border="0" /></a></td>
</tr>
</table>
<!-- 导航tab选项卡 -->
<table width="920" border="0" align="center" cellpadding="0" cellspacing="0" class="nav">
  <tr> 
    <td class="nav_global"><ul>
        <li class="curr" id="tabnav_btn_0" onmouseover="tabit(this)"><a href="[!--news.url--]">首页</a></li>
        <li id="tabnav_btn_1" onmouseover="tabit(this)"><a href="[!--news.url--]news/">新闻中心</a></li>
        <li id="tabnav_btn_2" onmouseover="tabit(this)"><a href="[!--news.url--]download/">下载中心</a></li>
        <li id="tabnav_btn_3" onmouseover="tabit(this)"><a href="[!--news.url--]movie/">影视频道</a></li>
        <li id="tabnav_btn_4" onmouseover="tabit(this)"><a href="[!--news.url--]shop/">网上商城</a></li>
        <li id="tabnav_btn_5" onmouseover="tabit(this)"><a href="[!--news.url--]flash/">FLASH频道</a></li>
        <li id="tabnav_btn_6" onmouseover="tabit(this)"><a href="[!--news.url--]photo/">图片频道</a></li>
        <li id="tabnav_btn_7" onmouseover="tabit(this)"><a href="[!--news.url--]article/">文章中心</a></li>
        <li id="tabnav_btn_8" onmouseover="tabit(this)"><a href="[!--news.url--]info/">分类信息</a></li>
      </ul></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="list_content"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>您当前的位置：[!--newsnav--]</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td colspan="3" class="info_list">
[!--empirenews.listtemp--]
<!--list.var1-->
[!--empirenews.listtemp--]
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list_page">
<tr>
<td>[!--show.page--]</td>
</tr>
</table></td>
</tr>
</table></td>
<td class="sider">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>地区导航</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
	<tr>
		<td width="33%"><img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=东城区">东城区</a></td>
		<td width="33%"><img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=西城区">西城区</a></td>
		<td width="33%"><img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=通州区">通州区</a></td>
	</tr>
	<tr>
		<td><img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=崇文区">崇文区</a></td>
		<td><img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=宣武区">宣武区</a></td>
		<td><img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=大兴区">大兴区</a></td>
	</tr>
	<tr>
		<td><img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" /><a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=朝阳区">&nbsp;朝阳区</a></td>
		<td><img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=海淀区">海淀区</a></td>
		<td><img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=昌平区">昌平区</a></td>
	</tr>
	<tr>
		<td><img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=丰台区">丰台区</a></td>
		<td><img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=石景山区">石景山区</a></td>
		<td><img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=其它">其它</a></td>
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
    <td bgcolor="#EEF1F4">&nbsp;<img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo/?classid=10"><strong>房屋信息</strong></a></td>
  </tr> 
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="[!--news.url--]e/action/ListInfo/?classid=11">房屋求租</a></td>
    <td width="33%"><a href="[!--news.url--]e/action/ListInfo/?classid=12">房屋出租</a></td>
  		<td width="33%"><a href="[!--news.url--]e/action/ListInfo/?classid=15">办公用房</a></td>
  </tr>
  <tr>
    <td><a href="[!--news.url--]e/action/ListInfo/?classid=13">房屋求购</a></td>
    <td><a href="[!--news.url--]e/action/ListInfo/?classid=14">房屋出售</a></td>
  		<td><a href="[!--news.url--]e/action/ListInfo/?classid=16">旺铺门面</a></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="4" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo/?classid=17"><strong>跳蚤市场</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="[!--news.url--]e/action/ListInfo/?classid=18">电脑配件</a></td>
    <td width="33%"><a href="[!--news.url--]e/action/ListInfo/?classid=19">电器数码</a></td>
  		<td width="33%"><a href="[!--news.url--]e/action/ListInfo/?classid=21">居家用品</a></td>
  </tr>
  <tr>
    <td><a href="[!--news.url--]e/action/ListInfo/?classid=20">通讯产品</a></td>
    <td><a href="[!--news.url--]e/action/ListInfo/?classid=21"></a></td>
  		<td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo/?classid=22"><strong>同城生活</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="[!--news.url--]e/action/ListInfo/?classid=23">本地新闻</a></td>
    <td width="33%"><a href="[!--news.url--]e/action/ListInfo/?classid=24">购物打折</a></td>
  		<td width="33%"><a href="[!--news.url--]e/action/ListInfo/?classid=26">便民告示</a></td>
  </tr>
  <tr>
    <td><a href="[!--news.url--]e/action/ListInfo/?classid=25">旅游活动</a></td>
    <td>&nbsp;</td>
  		<td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="[!--news.url--]e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="[!--news.url--]e/action/ListInfo/?classid=27"><strong>求职招聘</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="[!--news.url--]e/action/ListInfo/?classid=28">工程技术</a></td>
    <td width="33%"><a href="[!--news.url--]e/action/ListInfo/?classid=29">财务会计</a></td>
  		<td width="33%"><a href="[!--news.url--]e/action/ListInfo/?classid=31">经营管理</a></td>
  </tr>
  <tr>
    <td><a href="[!--news.url--]e/action/ListInfo/?classid=30">餐饮行业</a></td>
    <td><a href="[!--news.url--]e/action/ListInfo/?classid=31"></a></td>
  		<td>&nbsp;</td>
  </tr>
</table></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>推荐信息</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
[!--self.goodnews--]
</ul></td>
</tr>
</table></td>
</tr>
</table>
<!-- 页脚 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="center" class="search">
<form action="[!--news.url--]e/search/index.php" method="post" name="searchform" id="searchform">
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
<td><input type="image" class="inputSub" src="[!--news.url--]skin/default/images/search.gif" />
</td>
<td><a href="[!--news.url--]search/" target="_blank">高级搜索</a></td>
</tr>
</table>
</form>
</td>
</tr>
<tr>
<td>
	<table width="100%" border="0" cellpadding="0" cellspacing="4" class="copyright">
        <tr> 
          <td align="center"><a href="[!--news.url--]">网站首页</a> | <a href="#">关于我们</a> 
            | <a href="#">服务条款</a> | <a href="#">广告服务</a> | <a href="#">联系我们</a> 
            | <a href="#">网站地图</a> | <a href="#">免责声明</a> | <a href="[!--news.url--]e/wap/" target="_blank">WAP</a></td>
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