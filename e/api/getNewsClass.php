<?php
require_once('class/mobile_fun.php');
require('../class/connect.php');
require('../class/db_sql.php');
require("../class/q_functions.php");
require('../data/dbcache/class.php');
$link=db_connect();
$empire=new mysqlquery();

//读取网站栏目列表------2014/7/2---by liangguanyu------------------
function LGY_getNewsClass($bclassid=0){ 
    global $empire,$dbtbpre,$public_r,$ecms_config,$class_r;
	$sql=$empire->query("select classid,classname,sonclass,classimg,tbname,showclass from {$dbtbpre}enewsclass where bclassid='$bclassid' and showclass='0' order by myorder");
	while($r=$empire->fetch($sql))
	{
		
		$arr='';
		$sun='';
  		$arr=explode('|',$r[sonclass]);
		$count=count($arr);
 		for($i=1;$i<$count-1;$i++){
	
		  $sun[]=array(
			'classname' =>$class_r[$arr[$i]][classname],
			'classid'=>$arr[$i],
			'classimg'=>$class_r[$arr[$i]][classimg],
			'tbname'=>$class_r[$arr[$i]][tbname]
		  );
		}
		 
 		$data[]=array(
		     	
		  'bclass'=>array('bclassname' =>$r[classname],
		  'bclassid' =>$r[classid],
		  'bclassimg' =>$r[classimg],
		  'tbname'=>$r[tbname],
		  ),
		  'sonclass'=>$sun
		);
	}
	return $data;
}
    $check=LGY_getNewsClass((int)$_GET[bclassid]);
	if(is_array($check) || $check==null){
 				$code=1;	
				$result=$check;
				$info='读取网站栏目成功！';
 	}else{

       			$code=0;	
				$result=null;
				$info='读取网站栏目失败！' ;      
	}

    if($code==1){
	  $code='success';
	}else{
	  $code='error';
	}
	$arr = array(
			'code' =>$code,	
			'result'=>$check,
			'info'=>$info
	);
	makejson($arr);

db_close();
$empire=null;
?>