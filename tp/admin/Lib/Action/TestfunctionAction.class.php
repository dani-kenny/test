<?php
class TestfunctionAction extends CommonAction
{
	public function index()
	{
//记录的字段
//[username] 用户名
//[gameid]	游戏名称 
//[serverid]	服务器名称
//[unionid]	推广ID
//[loginip]	登陆IP
//[logintime]	登陆时间
//[source]	来源地址
//[remark]	备注
    //取出当天登录的用户
   
      
	}
	public function dau($start, $end, $long) {
		$user = array ();
		$list = array ();
		$search = S ( 'kx1dloginlog' );
		
		//取出这段时间的登录的所有用户
		foreach ( $search as $v ) {
			if (strtotime ( date ( 'Y-m-d', $v ['logintime'] ) ) <= strtotime ( $end ) && strtotime ( date ( 'Y-m-d', $v ['logintime'] ) ) >= strtotime ( $start )) {
				$tmp = array ('username' => $v ['username'], 'time' => $v ['logintime'] );
				array_push ( $user, $tmp );
			}
		}
		//根据活跃度进行循环
		for($i = 1; $i <= $long; $i ++) {
			$time = date ( 'Y-m-d', strtotime ( "+$i day", strtotime ( $start ) ) );
			foreach ( $user as $v ) {
				if (strtotime ( date ( 'Y-m-d', $v ['logintime'] ) ) == strtotime ( $start )) {
					$base ++;
					$baseuser [] = $v ['username'];
				}
				//取出每日的登录用户
				if (strtotime ( date ( 'Y-m-d', $v ['logintime'] ) ) == strtotime ( $time )) {
					$add [$i] [] = $v ['username'];
				}
			}
		
		}
		for($i = 1; $i <= $long; $i ++) {
			$time = date ( 'Y-m-d', strtotime ( "+$i day", strtotime ( $start ) ) );
			#将每天的登录用户和第一天的基数求交集数
			$num = count ( array_intersect ( $baseuser, $add [$i] ) ) / count ( $baseuser );
			$act = array ('data' => $time, 'act' => $num );
			array_push ( $list, $act );
		}
		return $list;
	
	}

}