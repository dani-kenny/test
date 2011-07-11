<?php
class TestAction extends CommonAction
{
	//实现ajax两级联动
	public function index()
	{
//		//php执行系统命令
//		    $result = shell_exec("sudo su");
//		    $tmp=shell_exec("pwd");
//            echo $tmp;
//            
//         //   
//		$search=M('tablelist');
//		$map=array();
//		$map['id']=1;
//		$list=$search->where($map)->select();
//		dump($list);
//		//插入测试数据
//	   $m=$list[0]['alias'].$list[0]['tablename'];
//	   echo $m;
//		$search=M($m);
//		for($i=0;$i<1000;$i++)
//		{
//			$data['regdate']=strtotime(date('Y-m-s H:i:s'));
//			$data['regip']=get_client_ip();
//			$data['logindate']=strtotime(date('Y-m-s H:i:s'));
//			$search->add($data);
//		}
//		die();
     // $this->AjaxReturn(1,'这是测试数据',1);
      $search=M('tablelist');
      $list=$search->select();
      $this->assign('menu',$list);
      $this->display();
		//
		
	}
	public function checked()
	{
		$value=array('S1','S2','S3');
		//
	
		$this->AjaxReturn($value,'这是测试数据',1);
	}
}