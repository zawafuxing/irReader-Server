<?php
require_once('class/mobile_fun.php');
require('../class/connect.php');
require('../class/db_sql.php');
require("../class/q_functions.php");
require('../data/dbcache/class.php');
$link=db_connect();
$empire=new mysqlquery();
 //读取信息
function LGY_getNewsList($post){ 
    global $empire,$dbtbpre,$public_r,$ecms_config,$class_r,$lgy;

 	if(empty($post[myorder])){$myorder='desc';}else{ $myorder='asc';}
 	if(empty($post[classid])){$where=null;}else{ $where='where classid in('.$post[classid].')';}
	if(empty($post[length])){$length=$lgy['title_length'];}else{ $length=(int)$post[length];}
	if(empty($post[small_length])){$small_length=$lgy['small_length'];}else{ $small_length=(int)$post[small_length];}
	if(empty($post[query])){$query='';}else{ $query=htmlspecialchars($post[query]);}
 	if(empty($post[pageSize])){$pageSize=$lgy['pageSize'];}else{ $pageSize=(int)$post[pageSize];$pageSize=RepPIntvar($pageSize);}
	if(empty($post[pageIndex])){$pageIndex=1;}else{ $pageIndex=(int)$post[pageIndex];$pageIndex=RepPIntvar($pageIndex);}
	if(empty($post[table])){$table=$lgy['table'];}else{ $table=htmlspecialchars($post[table]);}
	if($where){
		$and=$where.' and ';
	  }else{
		$and='where ';
	}
	switch($query){

		case 'onclick':
			$orderby = 'onclick'; 	
			break; 
		case 'ispic':
			$where = $and.'ispic =1'; 	
			break; 
		case 'word':
			$where = $and.'ispic =""'; 	
			break; 
		case 'plnum':
			$orderby = 'plnum '; 	
			break; 
		case 'firsttitle':
			$where = $and.'firsttitle !=""'; 	
			break; 
		case 'isgood':
			$where = $and.'isgood !=""'; 	
			break; 
		case 'photo':
			$where = $where = $and.'ispic =1 && firsttitle !=""';; 	
			break; 
		default:
			$orderby='newstime';
	}
         $sql=@mysql_query("select count(*) as total from `".$dbtbpre."ecms_".$table."` $where ");
		 if(!$sql){return '所请求的数据表不存在或为空';}
		 $r=$empire->fetch($sql);
		 $total=$r[total];

		$pageIndex=$pageIndex-1;
 		$pageTotal = ceil($total/$pageSize);
		if($pageIndex==$pageTotal && $pageIndex>1)$pageIndex=$pageTotal-1;
		if($pageSize!=''){
		  $page = $pageIndex *$pageSize;
		  $limit = $page.','.$pageSize;
		}
		$pageIndex=$pageIndex+1;

  	  if($query=="list"){
		$arr = explode(',',$post[classid]);
		
	  }else{
		$arr[]=0;
	  }

	  foreach($arr as $key => $val){
		  if(count($arr)>1){
			$where = 'where classid='.$val;
			if(empty($post[limit])){$limit=15;}else{ $limit=(int)$post[limit];}
		  }
		if($query=="list"){
		  $table=$class_r[$val]['tbname'];
		}
		if(!$table)continue;
		$sql=$empire->query("SELECT * FROM `".$dbtbpre."ecms_".$table."` $where order by $orderby $myorder limit $limit");
		
        $titlepic='';
		while($r=$empire->fetch($sql)){
 			if($r[titlepic]==''){ 
				$notimg=$public_r[news.url]."e/data/images/notimg.gif";
			}else{
					$titlepic=$r[titlepic];	

			}
  
			$oldtitle=stripSlashes($r[title]);
			$oldtitle=$r[title];
			$title=sub($oldtitle,'',$length);
			$smalltext=stripSlashes($r[smalltext]);
 			$smalltext=sub($smalltext,'',$small_length);
			$smalltext=strtr($smalltext,array('"' => '”'));
			$classname=$class_r[$r[classid]][classname];
			$newsurl=$public_r[newsurl];
			$classurl=$newsurl.$class_r[$r[classid]][classpath];
			$id=$r[id];
			$classid=$r[classid];
 		   $data[$val][]=array(
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
			'table'=>$table,
			'classurl'=>$classurl,
			'page'=>(int)$pageIndex,
			'reptitle'=>sub($oldtitle,'',25),
			'onclick'=>$r['onclick'],
			'diggtop'=>$r['diggtop'],
			'diggdown'=>$r['diggdown'],
			'plnum'=>$r['plnum']
			);
		    $titlepic='';
		}

	 $list[]=$data[$val];

    } //foreach
    return $arr = array(
			'code' =>'success',	
			'result'=>$list,
			'table'=>$post[table],
			'total' => $total,
			'pageTotal' => $pageTotal,
			'pageIndex' => $pageIndex,
			'pageSize' => $pageSize,
			'info'=>'读取信息列表成功！'
		);
  
}
    $check=LGY_getNewsList($_GET);
	if(is_array($check)){
		$arr=$check;
 	}else{
		$arr = array(
				'code' =>'error',	
				'result'=>$check,
				'info'=>'读取信息列表失败！'
		);    
	}
	makejson($arr,true);

db_close();
$empire=null;
?>