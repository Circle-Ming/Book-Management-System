<?php
	error_reporting(0);
	header("content-type:text/html;charset=UTF-8");
	$user = 'root';
	$pass = 'wanghuiming';
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
		$begin = "a"; 
		$endi = 1;
		$end = (string)$endi;
		$sum = $begin.$end;
		$number = 0;
		while(isset($_POST[$sum]))
		{
			$result = NULL;
			$rs = NULL;
			$flag = NULL;
			if(!empty($_POST[$sum]))
			{
				$number++;
				$b = 'b'.$end;$c = 'c'.$end;$d = 'd'.$end;$e = 'e'.$end;$f = 'f'.$end;$g = 'g'.$end;$h = 'h'.$end;
				if(!empty($_POST[$b]) && !empty($_POST[$c]) && !empty($_POST[$d]) && !empty($_POST[$e]) && !empty($_POST[$f]) && !empty($_POST[$g]) && !empty($_POST[$h]))
				{
					$_POST[$sum] = iconv('UTF-8', 'GB2312', $_POST[$sum]);$_POST[$b] = iconv('UTF-8', 'GB2312', $_POST[$b]);$_POST[$c] = iconv('UTF-8', 'GB2312', $_POST[$c]);$_POST[$d] = iconv('UTF-8', 'GB2312', $_POST[$d]);$_POST[$f] = iconv('UTF-8', 'GB2312', $_POST[$f]);
					$try = "select * from book where bno = '{$_POST[$sum]}' and category = '{$_POST[$b]}' and title = '{$_POST[$c]}' and press = '{$_POST[$d]}' and year = $_POST[$e] and author = '{$_POST[$f]}' and price = $_POST[$g]";
					$result = mysqli_query($conn, $try);
					$flag = mysqli_num_rows($result);
					if($flag == 1)
					{
						$sql = "update book set total = total +	$_POST[$h] where bno = '{$_POST[$sum]}' update book set stock = stock +	$_POST[$h] where bno = '{$_POST[$sum]}'";
						$rs = mysqli_query($conn, $sql);
						if(!$rs)
						{
							echo"书号为$_POST[$sum]的书籍信息出错，入库停止";
							mysqli_close($conn);
							exit();
						}	
					}
					else
					{
						$sql = "insert into book values('{$_POST[$sum]}', '{$_POST[$b]}', '{$_POST[$c]}', '{$_POST[$d]}', $_POST[$e], '{$_POST[$f]}', $_POST[$g], $_POST[$h], $_POST[$h])";
						$rs = mysqli_query($conn, $sql);
						if(!$rs)
						{
							echo"书号为$_POST[$sum]的书籍信息出错，入库停止";
							mysqli_close($conn);
							exit();
						}
					}
				}
				else
				{
					echo"书号为$_POST[$sum]的书籍信息不完全，入库停止";
					mysqli_close($conn);
					exit();
				}			
			}
			
			$b = 'b'.$end;$c = 'c'.$end;$d = 'd'.$end;$e = 'e'.$end;$f = 'f'.$end;$g = 'g'.$end;$h = 'h'.$end;
			if((empty($_POST[$sum])) && (!empty($_POST[$b]) || !empty($_POST[$c]) || !empty($_POST[$d]) || !empty($_POST[$e]) || !empty($_POST[$f]) || !empty($_POST[$g]) || !empty($_POST[$h])))
			{
				$number++;
				echo"某一书号为空,入库停止";
				mysqli_close($conn);				
				exit();
			}
			
			$endi++;
			$end = (string)$endi;
			$sum = $begin.$end;
		}
		if($number == 0)echo"请输入图书信息";
		else echo"图书入库成功";
		mysqli_close($conn);
	}
?>