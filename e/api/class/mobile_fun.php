<?php
/*
by liangguanyu http://www.bi126.com
接口基本配置参数 2014/7/25
*/
if(!$_POST)$_POST=$_GET;
$lgy=array(
'website'=>'http://www.kuvku.com',  //网站域名,后面不必带'/' 
'otherlinkNum'=>5,  //内容正文相关链接 数目
'small_length'=>80, //默认列表简介字符数
'title_length'=>40, //默认列表标题字符数
'pageSize'=>20,     //默认列表分页数目
'fpageSize'=>10,    //默认好友列表调用数目
'table'=>'news',    //默认列表调用数据表
);
function callback($URL,$method = 'GET') {
	    $feed='';
        $opts = array('http' =>
            array(
                'method' => $method,
                'timeout' => 10,
			    'user_agent'=>"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)"
            )
        );
		$feed=curl_get_contents($URL);
        if(!$feed){
         $context = stream_context_create($opts);
         $feed = @file_get_contents($URL, false, $context);
		}
		$feed = json_decode($feed, true);
        return $feed;
    }
function curl_get_contents($url)   
{   
    $ch = @curl_init();   
    @curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    @curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	@curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/x-www-form-urlencoded"));
    @curl_setopt($ch, CURLOPT_URL, $url);            //设置访问的url地址  
    //curl_setopt($ch,CURLOPT_HEADER,1);            //是否显示头部信息   
    @curl_setopt($ch, CURLOPT_TIMEOUT, 5);           //设置超时   
    // curl_setopt($ch, CURLOPT_USERAGENT, _USERAGENT_);   //用户访问代理 User-Agent   
    // curl_setopt($ch, CURLOPT_REFERER,_REFERER_);        //设置 referer   
    //curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);      //跟踪301   
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        //返回结果   
    $r = @curl_exec($ch);   
    @curl_close($ch);   
    return $r;   
} 
function arrayRecursive(&$array, $function, $apply_to_keys_also = false){
    static $recursive_counter = 0;
    if (++$recursive_counter > 1000) {
        die('possible deep recursion attack');
    }
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            arrayRecursive($array[$key], $function, $apply_to_keys_also);
        } else {
            $array[$key] = $function($value);
        }
        if ($apply_to_keys_also && is_string($key)) {
            $new_key = $function($key);
            if ($new_key != $key) {
                $array[$new_key] = $array[$key];
                unset($array[$key]);
            }
        }
    }
    $recursive_counter--;
}
function quote($str){
            $arr=array('"'=>"“", '&quot;'=> "“");
            $str=strtr($str,$arr);
            return $str;
}
function makejson($arr,$quote=false){
	if($_POST['jsoncallback']){
		if($quote){
			echo $_POST['jsoncallback'].'('.json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES).')';
		}else{
			arrayRecursive($arr, 'urlencode', true);
			echo urldecode($_POST['jsoncallback'].'('.json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES).')');
		}
	}else{
		if($quote){
			echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		}else{
			arrayRecursive($arr, 'urlencode', true);
			echo urldecode(json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
		}
	}
}
function CheckShowKey($varname,$postval,$dopr,$ecms=0){
	global $public_r;
	$r=explode(',',getcvar($varname,$ecms));
	$cktime=$r[0];
	$pass=$r[1];
	$val=$r[2];
	$time=time();
	if($cktime>$time||$time-$cktime>$public_r['keytime']*60)
	{
		return 'OutKeytime';
	}
	if(empty($postval)||md5($postval)<>$val)
	{
		return 'FailKey';
	}
	$checkpass=md5(md5(md5($postval).'EmpireCMS'.$cktime).$public_r['keyrnd']);
	if($checkpass<>$pass)
	{
		return 'FailKey';
	}
}
function lgy_tranTime($time) {
	$minute = date("H:i",$time);
	$hour = date("H:i",$time);
	$alltime = date("y-m-d H:i",$time);
	$time = time() - $time;

	if ($time < 60) {
		$str = ' 刚刚';
	}
	elseif ($time < 60 * 60) {
		$min = floor($time/60);
		$str = $min.' 分钟前';
	}
	elseif ($time < 60 * 60 * 24) {
		$h = floor($time/(60*60));
		$str = $h.' 小时前 '.$hour;
	}
	elseif ($time < 60 * 60 * 24 * 3) {
		$d = floor($time/(60*60*24));
		if($d=1)
		   $str = ' 昨天 '.$minute;
		else
		   $str = $alltime;
	}
    else {
		$str = $alltime;
	}
	return $str;
}
function checkLoinStamp($add){
	global $empire,$dbtbpre,$public_r;
	$userid=(int)$add[userId];
	$username=RepPostVar($add[userName]);
	$rnd=RepPostVar($add[loginStamp]);
	$r=$empire->fetch1("select ".eReturnSelectMemberF('rnd,groupid')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$userid' and ".egetmf('username')."='$username' and ".egetmf('rnd')."='$rnd' limit 1");
	if($r){
		return $check=array(
			   "userid"=>$userid,
			   "groupid"=>$r[groupid],
			   "username"=>$username,
			   "rnd"=>$rnd
		);
	}else{
	   return 0;
	}
}
?>