<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html lang="zh-CN">

<head>
	<meta charset="utf-8">
	<title><?=$ecms_gr[title]?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://www.kuvku.com/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="http://www.kuvku.com/bootstrap/common.css" />
</head>
<body>
	<div class="aw-mod aw-question-detail aw-item">
		<div class="mod-head">
			<h1><?=$ecms_gr[title]?></h1>

		</div>
		<div class="mod-body">
			<div class="content markitup-box">
			<?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
			</div>
		</div>		
	</body>
	</html>