<?php
class Test2Action extends CommonAction
{
	public function index()
	{
//		$data=S(coin_1);
//		dump($data);
        $s=array();
        $data=array(1,2,3,4,5,6,7,8,9,10);
//        foreach($data as $v)
//        {
//        	if($v%2==0)
//        	{
//        		$t[]=$v;
//        		
//        	}
//        	
//        }
//        array_push($s, $t);
//        dump($s);die();
        
        for($i=0;$i<7;$i++)
        {
        	foreach($data as $v)
        	{   
        		if($v%2==0)
        		{
        			$temp[$i]=array('a'=>$i,'b'=>$i+1);
        			
        		}
        		
        	}
        	array_push($s,$temp);
        	
        }
		dump($s);
//		echo $_SESSION['email'];
//		echo $_SESSION['loginUserName'];
//		echo $_SESSION['lastLoginTime'];
//		echo get_client_ip();
//		echo DATA_PATH;
//		for($i=0;$i<1000;$i++)
//		{
//		$array[$i]["email"]=$_SESSION['email'];
//		$array[$i]["loginUserName"]=$_SESSION['loginUserName'];
//		$array[$i]["lastLoginTime"]=$_SESSION['lastLoginTime'];
//		$array[$i]["ip"]=get_client_ip();
//		F('data',$array);
//		}
//		$array["email"]=$_SESSION['email'];
//		$array["loginUserName"]=$_SESSION['loginUserName'];
//		$array["lastLoginTime"]=$_SESSION['lastLoginTime'];
//		$array["ip"]=get_client_ip();
//		F('data',$array);
	//	dump($_SESSION);
//	    $tmp=F('data');
//	    dump($tmp);
 
	}
	//public function 
}