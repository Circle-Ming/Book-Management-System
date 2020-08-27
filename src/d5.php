<html>
	<head>
		<meta charset="utf-8">
		<style>
			.btn
			{
				width: 60px;
				height: 30px;
				border: 0;
				background-color: rgba(0, 0, 0, 0.8);
				font-size: 20px;
				color: white;
			}
			*{margin:0;padding:0;}
			th{width:270px;}
			td{width:270px;}
			.delete
			{ 
				height:350px;
				overflow:scroll;
				overflow-x:hidden;
			} 
		</style> 
		
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script>
			function card_delete(td, $b)
			{
				var tr = $(td).parent().parent();
				var tr_td = tr.children("td");
				var tr_td_0 = tr_td.eq(0);
				var show_td = tr_td_0.text();
				var sql = "delete from card where cno = '" + show_td + "'";
				$.ajax({
					type:"POST",
					url:"d5_2.php",
					data:{trans_data: sql, trans_cno: show_td}, 
					success: function(msg){
						alert(msg);
						window.location.reload(); 
							  },
				});
			}

			function PostData()
			{
				$.ajax({
					type:'POST',
					url:'d5_1.php',
					data:$('#form1').serialize(),
					success: function(msg){
						alert(msg);
						window.location.reload();
						$('#form1')[0].reset();
							  },
				});
				return false;					
			}
		</script>
	</head>
	<body>
		<div class = "delete">
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
				echo"<script>alert('数据库连接失败');</script>";
				exit();
			}
			else
			{
				$id_begin = "t";
				$id_endi = 1;
				$id_end = (string)$id_endi;
				$id = $id_begin.$id_end;
				$sql = "select * from card";
				$rs = mysqli_query($conn, $sql);
		?>
		<table border = 1 style = "margin-top: 20px;margin-left: 200px;width: 860px;overflow-y: scroll;">
			<thead>
				<tr>
					<th style = "width: 200px;height: 30px"><h4>卡号</h4></th>
					<th style = "width: 200px;height: 30px"><h4>姓名</h4></th>
					<th style = "width: 200px;height: 30px"><h4>单位</h4></th>
					<th style = "width: 200px;height: 30px"><h4>类别</h4></th>
					<th style = "width: 60px;height: 30px">按钮</th>
				</tr>
			</thead>
		<?php
				while(odbc_fetch_row($rs) == ture)
				{
					$cno = mysqli_result($rs, 'cno');
					$name = mysqli_result($rs, 'name');
					$department = mysqli_result($rs, 'department');
					$type = mysqli_result($rs, 'type');
					$cno = iconv('GB2312', 'UTF-8', $cno);
					$name = iconv('GB2312', 'UTF-8', $name);
					$department = iconv('GB2312', 'UTF-8', $department);
					$type = iconv('GB2312', 'UTF-8', $type);
		?>

				<tr>
					<td style = "width: 200px;height: 30px"><?php echo $cno;?></td>
					<td style = "width: 200px;height: 30px"><?php echo $name;?></td>
					<td style = "width: 200px;height: 30px"><?php echo $department;?></td>
					<td style = "width: 200px;height: 30px"><?php echo $type;?></td>
					<td style = "width: 60px;height: 30px"><button class="btn" onclick = "card_delete(this,<?php $conn;?>)">删除</button></td>
				</tr>
		<?php
					$id_endi++;
					$id_end = (string)$id_endi;
					$id = $id_begin.$id_end;
				}
			}
		?>
		</table>
		</div>	
		<hr />
		<div>
			<form id = "form1" action = "##" method = "post">
				<table frame = 'void' border = 0 style = 'padding:20px 120px;border-collapse:separate;border-spacing:0'>
					<thead>
						<tr>
						<th><h4>卡号</h4></th>
						<th><h4>姓名</h4></th>
						<th><h4>单位</h4></th>
						<th><h4>类别</h4></th>
						</tr>
					</thead>
					<tr>
						<td><input type = "text" name = "a1" style = "width:250px;height:30px;"></td>
						<td><input type = "text" name = "a2" style = "width:250px;height:30px;"></td>
						<td><input type = "text" name = "a3" style = "width:250px;height:30px;"></td>
						<td><input type = "text" name = "a4" style = "width:250px;height:30px;"></td>
						<td><input type = "button" value = "添加" class="btn" onclick = "PostData()"></td>	
					</tr>				
				</table>
			</form>
		</div>
	</body>
</html>