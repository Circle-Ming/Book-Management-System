<?php
	error_reporting(0);
	header("content-type:text/html;charset=UTF-8");
	$conn = mysqli_connect(   
                'localhost',  /* The host to connect to 连接MySQL地址 */   
                'root',      /* The user to connect as 连接MySQL用户名 */   
                'wanghuiming',  /* The password to use 连接MySQL密码 */   
                'FinalLib');
	if(!$conn)
	{	
		echo"数据库连接失败";
		exit();
	}
	else
	 
	{
		$rs = mysqli_query($conn, $_POST[trans_data]);
		if($rs)echo"借书证删除成功";
		else 
		{
			$sql = "select bno from borrow where cno = '{$_POST[trans_cno]}' and return_situation = '0'";
			$rs_1 = mysqli_query($conn, $sql);
			$num = mysqli_result($rs_1, bno);
			echo"借书证删除失败,有书号为",$num,"的图书没有归还";	
			exit();		
		}
	}
?>