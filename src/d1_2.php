<?php
	error_reporting(0);
	header("content-type:text/html;charset=UTF-8");
	if(empty($_POST['url']))
	{
		echo"请输入文本地址";	
		return;
	}
	else 
	{
		$conn = mysqli_connect(   
                'localhost',  /* The host to connect to 连接MySQL地址 */   
                'root',      /* The user to connect as 连接MySQL用户名 */   
                'wanghuiming',  /* The password to use 连接MySQL密码 */   
                'FinalLib');	
        if(!$conn)
        {   
				            echo"<script>alert('数据库连接失败');</script>";
				            mysqli_close($conn);
				            exit(); 
		}
		else
	    {
							if(file_exists($_POST['url']))
							{
								$lines = file("$_POST[url]");
								if(!$lines)
								{
									echo"文本为空";
									mysqli_close($conn);
									return;
								}
								else
								{
									foreach ($lines as $value) 
									{
										$result = NULL;
										$rs = NULL;
										$line = explode("\t", $value);
										if(!isset($line[0]) || !isset($line[1]) || !isset($line[2]) || !isset($line[3]) || !isset($line[4]) || !isset($line[5]) || !isset($line[6]) || !isset($line[7]))
										{

										}
										else if(empty($line[0]) || empty($line[1]) || empty($line[2]) || empty($line[3]) || empty($line[4]) || empty($line[5]) || empty($line[6]) || empty($line[7]))
										{
											echo"书号为$line[0]的书籍信息出错，入库停止";
											mysqli_close($conn);
											exit();
										}
										else
										{
											$line[0] = iconv('UTF-8', 'GB2312', $line[0]);$line[1] = iconv('UTF-8', 'GB2312', $line[1]);$line[2] = iconv('UTF-8', 'GB2312', $line[2]);$line[3] = iconv('UTF-8', 'GB2312', $line[3]);$line[5] = iconv('UTF-8', 'GB2312', $line[5]);
											$line[4] = (int)$line[4];$line[6] = (double)$line[6];$line[7] = (int)$line[7];
											$try = "select * from book where bno = '{$line[0]}' and category = '{$line[1]}' and title = '{$line[2]}' and press = '{$line[3]}' and year = $line[4] and author = '{$line[5]}' and price = $line[6]";
											$result = mysqli_query($conn, $try);
											$flag = mysqli_num_rows($result);
											if($flag == 1)
											{
												$sql = "update book set total = total +	$line[7] where bno = '{$line[0]}' update book set stock = stock +	$line[7] where bno = '{$line[0]}'";
												$rs = mysqli_query($conn, $sql);
												if(!$rs)
												{
													echo"书号为$line[0]的书籍信息出错，入库停止";
													mysqli_close($conn);
													exit();
												}	
											}
											else
											{
												$sql = "insert into book values('{$line[0]}', '{$line[1]}', '{$line[2]}', '{$line[3]}', $line[4], '{$line[5]}', $line[6], $line[7], $line[7])";
												$rs = mysqli_query($conn, $sql);
												if(!$rs)
												{
													echo"书号为$line[0]的书籍信息出错，入库停止";
													mysqli_close($conn);
													exit();
												}
											}
										}
									}
									echo"图书入库成功";

								}
							}
							else
							{
								echo"文本地址有误";
								mysqli_close($conn);
								return;
							}
		}
	}
	odbc_close($conn);
?>