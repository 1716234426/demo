<?php
//通过文件上传的服务器临时存储路径生成随机文件名  时间戳+随机字母+扩展名;
if(!function_exists('getRandName')){
	function getRandName($path){
		$string = '';
		for($i = 0;$i<6;$i++){
			$string.=chr(mt_rand(97,122));
		}
		$date = time(); //时间戳
		$extension = pathinfo($path,PATHINFO_EXTENSION);  //得到扩展名
		$string.=$date . "." . $extension;    //时间戳+随机字母+扩展名;
		return $string;
}
if(!function_exists('preg_price_num')){
	function preg_price_num($path){
		$patterns = "/(([1-9]\d*)|^0)(\.\d{0,2}){0,1}/";
		preg_match_all($patterns,$path,$preg_price_num);
		return $preg_price_num[0][0];
	}
}