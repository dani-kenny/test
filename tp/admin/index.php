<?php
define ( 'THINK_PATH', '../ThinkPHP' );
define ( 'APP_NAME', 'admin' );
define ( 'APP_PATH', '.' );
// 加载框架入口文件 
require (THINK_PATH . "/ThinkPHP.php");
//实例化一个网站应用实例 
App::run ();
?>