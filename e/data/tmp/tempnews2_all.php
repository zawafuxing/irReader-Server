<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$grpagetitle?> - Powered by EmpireCMS</title>
<meta name="Keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
</head>
<body class="showpage">
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
<a onclick="window.external.addFavorite(location.href,document.title)" href="#ecms">加入收藏</a> | <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('/')" href="#ecms">设为首页</a> | <a href="/e/member/cp/">会员中心</a> | <a href="/e/DoInfo/">我要投稿</a> | <a href="/e/web/?type=rss2&classid=<?=$ecms_gr[classid]?>" target="_blank">RSS<img src="/skin/default/images/rss.gif" border="0" hspace="2" /></a>
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
		<td class="main"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
				<tr>
					<td>您当前的位置：<?=$grurl?></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><table width="100%" border="0" cellpadding="3" cellspacing="2" bgcolor="#FFFFFF">
							<tbody>
								<tr>
									<td width="78" align="center" nowrap="nowrap" bgcolor="#E1EFFB"><b>软件名称：</b></td>
									<td colspan="2" bgcolor="#E1EFFB"><b><?=$ecms_gr[title]?></b></td>
								</tr>
								<tr>
									<td align="center"><strong>文件类型：</strong></td>
									<td width="296"><?=$ecms_gr[filetype]?></td>
									<td width="180" rowspan="9" align="center"><a href="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" target="_blank"><img src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" border="0" width="128" /></a></td>
								</tr>
								<tr>
									<td align="center" bgcolor="#F4F9FD"><strong>界面语言：</strong></td>
									<td bgcolor="#F4F9FD"><?=$ecms_gr[language]?></td>
								</tr>
								<tr>
									<td align="center"><strong>软件类型：</strong></td>
									<td><?=$ecms_gr[softtype]?></td>
								</tr>
								<tr>
									<td align="center" bgcolor="#F4F9FD"><strong>运行环境：</strong></td>
									<td bgcolor="#F4F9FD"><?=$ecms_gr[softfj]?></td>
								</tr>
								<tr>
									<td align="center"><strong>授权方式：</strong></td>
									<td><?=$ecms_gr[softsq]?></td>
								</tr>
								<tr>
									<td align="center" bgcolor="#F4F9FD"><strong>软件大小：</strong></td>
									<td bgcolor="#F4F9FD"><?=$ecms_gr[filesize]?></td>
								</tr>
								<tr>
									<td align="center"><strong>软件等级：</strong></td>
									<td><img src="/e/data/images/<?=$ecms_gr[star]?>star.gif" border="0" /></td>
								</tr>
								<tr>
									<td align="center" bgcolor="#F4F9FD"><strong>软件登陆：</strong></td>
									<td bgcolor="#F4F9FD"><?=$ecms_gr[username]?></td>
								</tr>
								<tr>
									<td align="center"><strong>作 者 ：</strong></td>
									<td><?=$ecms_gr[softwriter]?></td>
								</tr>
								<tr>
									<td align="center" bgcolor="#F4F9FD"><strong>官方网址：</strong></td>
									<td colspan="2" bgcolor="#F4F9FD"><a href='<?=$ecms_gr[homepage]?>' target="_blank">官方站</a></td>
								</tr>
								<tr>
									<td align="center"><strong>程序演示：</strong></td>
									<td colspan="2"><a href='<?=$ecms_gr[demo]?>' target="_blank">演示</a></td>
								</tr>
								<tr>
									<td align="center" bgcolor="#F4F9FD"><strong>整理时间：</strong></td>
									<td colspan="2" bgcolor="#F4F9FD"><?=date('Y-m-d',$ecms_gr[newstime])?></td>
								</tr>
								<tr>
									<td align="center"><strong>软件简介：</strong></td>
									<td 
            colspan="2"> <?=nl2br($ecms_gr[softsay])?></td>
								</tr>
								<tr>
									<td width="78" align="center" nowrap="nowrap" bgcolor="#F4F9FD"><b><font color="#008E00">下载地址：</font></b></td>
									<td colspan="2" bgcolor="#F4F9FD"> <?=ReturnDownSoftHtml($ecms_gr)?></td>
								</tr>
								<tr>
									<td align="center" nowrap="nowrap"><strong>下载帮助：</strong></td>
									<td colspan="2"><img src="/e/data/images/gonggao.gif" border="0" /><a href="/e/pl/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">发表评论</a> <img src="/e/data/images/gonggao.gif" border="0" /><a href="/e/member/fava/add/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">加入收藏夹</a> <img src="/e/data/images/gonggao.gif" border="0" /><a href="/e/public/report/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>" target="_blank">错误报告</a></td>
								</tr>
								<tr>
									<td width="78" align="center" valign="top" nowrap="nowrap" bgcolor="#F4F9FD"><b><font color="#008E0">相关软件：</font></b></td>
									<td colspan="2" bgcolor="#F4F9FD"><?=GetKeyboard($ecms_gr[keyboard],$ecms_gr[keyid],$ecms_gr[classid],$ecms_gr[id],$class_r[$ecms_gr[classid]][link_num])?></td>
								</tr>
								<tr>
									<td align="center" valign="center" nowrap="nowrap"><strong>下载说明：</strong></td>
									<td colspan="2">⊙推荐使用网际快车下载本站软件，使用 WinRAR v3.10 以上版本解压本站软件。<br />
										⊙如果这个软件总是不能下载的请点击报告错误,谢谢合作!!<br />
										⊙下载本站资源，如果服务器暂不能下载请过一段时间重试！<br />
										⊙如果遇到什么问题，请到<a href="http://www.phome.net" target="_blank">本站论坛</a>去咨寻，我们将在那里提供更多
										、更好的资源！<br />
										⊙本站提供的一些商业软件是供学习研究之用，如用于商业用途，请购买正版。 </td>
								</tr>
							</tbody>
						</table>
						</td>
				</tr>
			</table>
			<script>
		  function CheckPl(obj)
		  {
		  if(obj.saytext.value=="")
		  {
		  alert("您没什么话要说吗？");
		  obj.saytext.focus();
		  return false;
		  }
		  return true;
		  }
		  </script><form action="/e/pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="plpost">

<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="title">
<tr>
<td><strong>发表评论</strong></td>
<td align="right"><a href="/e/pl/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">共有<span><script type="text/javascript" src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=2"></script></span>条评论</a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="2">
<tr>
<td width="56%" align="left">用户名:
<input name="username" type="text" class="inputText" id="username" value="" size="16" /></td>
<td width="44%" align="left">密码:
<input name="password" type="password" class="inputText" id="password" value="" size="16" /></td>
</tr>
<tr>
<td align="left">验证码:
<input name="key" type="text" class="inputText" size="10" />
<img src="/e/ShowKey/?v=pl" align="absmiddle" name="plKeyImg" id="plKeyImg" onclick="plKeyImg.src='/e/ShowKey/?v=pl&t='+Math.random()" title="看不清楚,点击刷新" /> </td>
<td align="left"><input name="nomember" type="checkbox" id="nomember" value="1" checked="checked" />
匿名发表</td>
</tr>
</table>
<textarea name="saytext" rows="6" id="saytext"></textarea><input name="imageField" type="image" src="/e/data/images/postpl.gif"/>
<input name="id" type="hidden" id="id" value="<?=$ecms_gr[id]?>" />
<input name="classid" type="hidden" id="classid" value="<?=$ecms_gr[classid]?>" />
<input name="enews" type="hidden" id="enews" value="AddPl" />
<input name="repid" type="hidden" id="repid" value="0" />
<input type="hidden" name="ecmsfrom" value="<?=$grtitleurl?>"></td>
</tr>
</table>
</td>
</tr>
</table></form></td>
		<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
				<tr>
					<td><strong>推荐下载</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><ul>
              <script src='/d/js/class/class<?=$ecms_gr[classid]?>_goodnews.js'></script></ul></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
				<tr>
					<td><strong>最后更新</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><ul>
              <script src='/d/js/class/class<?=$ecms_gr[classid]?>_newnews.js'></script></ul></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
				<tr>
					<td><strong>热门点击</strong></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
				<tr>
					<td><ul>
              <script src='/d/js/class/class<?=$ecms_gr[classid]?>_hotnews.js'></script></ul></td>
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
</table> <?='<script src="'.$public_r[newsurl].'e/public/onclick/?enews=donews&classid='.$ecms_gr[classid].'&id='.$ecms_gr[id].'"></script>'?>
</body>
</html>