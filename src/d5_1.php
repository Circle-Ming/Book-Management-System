<?php
	error_reporting(0);	
	header("content-type:text/html;charset=UTF-8");
	$user = 'root';
	$pass = 'wanghuiming';
	$flag_0 = '借书证添加成功';
	$flag_1 = '借书证添加失败';
			
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
 
		if(!empty($_POST[a1]))
		{
			$_POST[a1] = iconv('UTF-8', 'GB2312', $_POST[a1]);$_POST[a2] = iconv('UTF-8', 'GB2312', $_POST[a2]);$_POST[a3] = iconv('UTF-8', 'GB2312', $_POST[a3]);$_POST[a4] = iconv('UTF-8', 'GB2312', $_POST[a4]);
			$sql = "insert into card values('{$_POST[a1]}', '{$_POST[a2]}', '{$_POST[a3]}', '{$_POST[a4]}')";
			$rs = mysqli_query($conn, $sql);
			if(!$rs)
			{
				echo"$flag_1";
				exit();
			}			
		}
		else
		{ 
			echo"$flag_1";
			exit();
		}
		echo"$flag_0";		
	}		
?>