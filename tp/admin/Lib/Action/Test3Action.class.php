<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nixu
 * Date: 11-7-11
 * Time: 上午10:27
 * To change this template use File | Settings | File Templates.
 */
 
//test 测试CURL的用法
class Test3Action extends Action
{
    public function index()
    {
        $file = "/Users/nixu/".date('H').'_'.date('i').'_'.date('s').'.txt';
        file_put_contents($file,date('Y-m-d'));
    }

}
