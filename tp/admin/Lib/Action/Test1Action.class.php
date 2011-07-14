<?php
class Test1Action extends CommonAction
{
//http://www.kx1d.com/index.php?s=/Index/yjjh/sid/4/fromid/01
//http://www.kx1d.com/index.php?s=/Index/yjjh/sid/4/fromid/02
//http://www.kx1d.com/index.php?s=/Index/yjjh/sid/4/fromid/03
//http://www.kx1d.com/index.php?s=/Index/yjjh/sid/4/fromid/04
//http://www.kx1d.com/index.php?s=/Index/yjjh/sid/4/fromid/05
//http://www.kx1d.com/index.php?s=/Index/yjjh/sid/4/fromid/06
//http://www.kx1d.com/index.php?s=/Index/yjjh/sid/4/fromid/07
//http://www.kx1d.com/index.php?s=/Index/yjjh/sid/4/fromid/08
//http://www.kx1d.com/index.php?s=/Index/yjjh/sid/4/fromid/09
//http://www.kx1d.com/index.php?s=/Index/yjjh/sid/4/fromid/10
    public function index()
    {    
//    	//$str="23 b $%^ 我 56";
//    	$str="23_456 $%^#@ 我是谁";
//    	//\d标识0－9的数字[0-9]
//    	//\D:表示任意一个除数字这外的字符[^0-9]
//    	//\s  : 表示任意一个空白字符，空格、\n\r\t\f
//    	//\S:标识一个非任意一个空白字符 
//    	//\w  : 表示任意一个字 a-zA-Z0-9_ 
//    	//\W  : 表示任意一个非字， 除了a-zA-Z0-9_以外的任意一个字符  [^a-zA-Z0-9_]
//    	//$pattern="/\d{2}\s{1,}\D{1}\s{1,}\w{3}\s{1,}\w{1}\s{1,}\d{2}/";
//    	$pattern="/(\d{2}\w{1}\d{3}\s{1})((\W{1,})\s{1}(\w{1,}))/";
//    	if(preg_match($pattern, $str,$arr))
//    	{
//    		echo "正则表达式".$pattern."和字符串".$str."匹配成功";
//    		dump($arr).'<br>';
//    	}
//    	else
//    	{
//    		echo  "正则表达式".$pattern."和字符串".$str."匹配失败";
//    	}
    	$str="http://www.kx1d.com/index.php?s=/Index/yjjh/sid/4/fromid/10";
    	$pattern="/\w{4}\:\/\/\w{3}\.\w{4}\.\D{3}\/\D{5}\.\D{3}\W{1}\D{1}\=\/\D{5}\/\D{4}\/\D{3}\/\d{1}\/\D{6}\/(\d{1,})/";
    	if(preg_match($pattern, $str,$arr))
       {
    		echo "正则表达式".$pattern."和字符串".$str."匹配成功";
    		dump($arr).'<br>';
    	}
    	else
    	{
    		echo  "正则表达式".$pattern."和字符串".$str."匹配失败";
    	}
    	
    }
	
}
