<?php
require_once('class/mobile_fun.php');
require('../class/connect.php');
require('../class/db_sql.php');
require("../class/q_functions.php");
require("../class/t_functions.php");
require('../data/dbcache/class.php');
$link=db_connect();
$empire=new mysqlquery();
 //读取内容------2014/7/2---by liangguanyu------------------
function LGY_getOtherLink($keyboard,$keyid){
global $empire,$public_r,$class_r,$_GET,$navinfor,$lgy;
if(empty($keyid))$keyid=0;
$classid=(int)$_GET['classid'];
$navinfor[id]=(int)$_GET['id'];;
$navinfor[classid]=(int)$_GET['classid'];;
$navinfor[keyid]=$keyid;
$navinfor[keyboard]=$keyboard;
$sql=@sys_OtherLinkQuery($classid,$lgy['otherlinkNum'],'',0);

 if($sql){
		while($r=$empire->fetch($sql)){
 			if($r[titlepic]==''){ 
				$notimg=$public_r[news.url]."e/data/images/notimg.gif";
			}else{
				$titlepic=$r[titlepic];	
			}
			$oldtitle=stripSlashes($r[title]);
			$oldtitle=$r[title];
			$title=sub($oldtitle,'',30);
			$smalltext=stripSlashes($r[smalltext]);
 			$smalltext=sub($smalltext,'',50);
			$smalltext=strtr($smalltext,array('"' => '”'));
			$classname=$class_r[$r[classid]][classname];
			$newsurl=$public_r[newsurl];
			$classurl=$newsurl.$class_r[$r[classid]][classpath];
			$id=$r[id];
			$classid=$r[classid];
 		    $data[]=array(
			'title'=>$title,
			'titleurl'=>$r[titleurl],
			'username'=>$r[username],
			'titlepic'=>$titlepic,
			'titlepicurl' =>$r[titlepic],
			'notimg'=>$notimg,
			'newstime'=>date("Y-m-d",$r[newstime]),
			'id'=>$id,
			'classid'=>$classid,
			'smalltext'=>$smalltext,
			'classname'=>$classname,
			'classurl'=>$classurl,
			'onclick'=>$r['onclick'],
			'diggtop'=>$r['diggtop'],
			'diggdown'=>$r['diggdown'],
			'plnum'=>$r['plnum']
			);
		}
		return $data;
	}else{
	
	   return '暂无相关文章';
	
	}
}

function LGY_getNewsContent($get){
	    global $empire,$dbtbpre,$public_r,$ecms_config,$class_r,$lgy;

 		$classid=(int)$_GET['classid'];
		$id=(int)$_GET['id'];
 		if($id=='' && $classid ==''){
			
			return '信息ID以及栏目ID不能为空';
			
		}else{

			if(!$classid||!$class_r[$classid]['tbname']||!$id||InfoIsInTable($class_r[$classid]['tbname']))
			{

				return '您来自的链接不存在';
				exit();
			}
			$cpage=(int)$get['cpage'];
			$cid=(int)$get['cid'];
			$bclassid=(int)$_GET['bclassid'];
			if(empty($cid))
			{
				$cid=$classid;
			}
			$listurl="list.php?style=".$wapstyle."&amp;page=".$cpage."&amp;classid=".$cid."&amp;bclassid=".$bclassid;
			$r=$empire->fetch1("select * from {$dbtbpre}ecms_".$class_r[$classid]['tbname']." where id='$id' limit 1");

			if(!$r['id']||$classid!=$r[classid])
			{
				return '您来自的链接不存在';
				exit();
			}
			if($r['groupid']||$class_r[$classid]['cgtoinfo'])
			{
				return '您来自的链接不存在';
				exit();
			}
			//系统模型
			$keyboard = $r['keyboard'];
			$modid=$class_r[$classid][modid];
			//副表
			$finfor=$empire->fetch1("select ".ReturnSqlFtextF($modid)." from {$dbtbpre}ecms_".$class_r[$classid]['tbname']."_data_".$r[stb]." where id='$r[id]' limit 1");
			$r=array_merge($r,$finfor);
			$ret_r=ReturnAddF($modid,1);

			//$pagetitle=DoWapClearHtml($r['title']);
			//存文本内容
			$savetxtf=$emod_r[$modid]['savetxtf'];
			if($savetxtf&&$r[$savetxtf])
			{
				$r[$savetxtf]=GetTxtFieldText($r[$savetxtf]);
			}
			//分页字段
			$pagef=$emod_r[$modid]['pagef'];
			if($pagef&&$r[$pagef])
			{
				//替换掉分页符
				$r[$pagef]=str_replace('[!--empirenews.page--]','',$r[$pagef]);
				$r[$pagef]=str_replace('[/!--empirenews.page--]','',$r[$pagef]);
			}
            $r[newstext]=str_replace('[!--empirenews.page--]','',$r[newstext]);
            $r[newstext]=str_replace('[/!--empirenews.page--]','',$r[newstext]);
			$oldtitle=stripSlashes($r[title]);
			$title=sub($oldtitle,'',$length);
			$smalltext=stripSlashes($r[smalltext]);
 			$classname=$class_r[$r[classid]][classname];
			$classurl=$newsurl.$class_r[$r[classid]][classpath];
			
			//文章中的图片路径没有包含域名则加上域名
			$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";  
			preg_match_all($pattern,stripSlashes($r[newstext]),$match);
			foreach($match[1] as $key=>$value){
				if(strpos($value,'http://') === false){
					$r[newstext]=str_replace($value,$lgy['website'].$value,stripSlashes($r[newstext]));
				}
			}
			$newstext=str_replace('<img ','<img class="img-responsive" ',stripSlashes($r[newstext]));
			require('../class/onclickfun.php');
 			InfoOnclick($classid,$id); //刷新点击
			return $data=array(
				'title'=>$oldtitle,
				'titleurl'=>$r[titleurl],
				'username'=>stripSlashes($r[username]),
				'titlepic'=>$r[titlepic],
				'notimg'=>$titlepic,
				'newstime'=>date("Y-m-d",$r[newstime]),
				'id'=>$r[id],
				'classid'=>$r[classid],
				'classname'=>$classname,
				'classurl'=>$classurl,
				'page'=>(int)$_POST['next'],
				'reptitle'=>sub($oldtitle,'',25),
				'onclick'=>$r['onclick'],
				'diggtop'=>$r['diggtop'],
				'diggdown'=>$r['diggdown'],
				'plnum'=>$r['plnum'],
				'smalltext'=>$smalltext,
				'newstext'=>$newstext,
				'keyboard'=>$keyboard,
				'keyid'=>$r[keyid],
			);
		}
}
    $check=LGY_getNewsContent($_GET);
	if(is_array($check) || $check==null){
		$code=1;	
		$result=array('content'=>$check,'otherLink'=>LGY_getOtherLink($check[keyboard],$check[keyid]));
		$info='读取信息内容成功！';
 	}else{
		$code=0;	
		$result=null;
		$info='读取信息内容失败！' ;      
	}

    if($code==1){
	  $code='success';
	}else{
	  $code='error';
	}
	$arr = array(
		'code' =>$code,	
		'result'=>$result,
		'info'=>$info
	);
	makejson($arr,true);

db_close();
$empire=null;
?>