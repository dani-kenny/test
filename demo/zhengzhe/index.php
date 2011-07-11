<?php
  $pattern="/[^0-9]/";   //正则表达式模式
$string="0786968379#780780970";      //需要和上面模式字符串进行匹配的变量字符串

   if(preg_match($pattern, $string)){
   	echo "正则表达式 <b>{$pattern} </b>和字符串 <b>{$string}</b> 匹配成功";
   }else{
   	echo "<font color='red'>正则表达式{$pattern} 和字符串 {$string} 匹配失败</font>";
   }
