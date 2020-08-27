<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html;charset=UTF-8">	
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
			
		*{margin:0px;padding:0px;}
		input[type="number"]{
		  -moz-appearance: textfield;
		}
		</style> 
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script>
			function PostData_1()
			{
				$.ajax({
					type:'POST',
					url:'d1_1.php',
					data:$('#form1').serialize(),
					success: function(msg){
						alert(msg);
						window.location.reload();
						$('#form1')[0].reset();
							  },
				});
				return false;					
			}
			function PostData_2()
			{
				$.ajax({
					type:'POST',
					url:'d1_2.php',
					data:$('#form2').serialize(),
					success: function(msg){
						alert(msg);
						window.location.reload();
						$('#form2')[0].reset();
							  },
				});
				return false;					
			}
		</script>
	</head>
	<body>		
			<h1 style="margin-left: 40px;margin-top: 20px;">单本入库</h1>	
			<form id = "form1" action = "##" method = "post">
				<table border = 0 style = "padding:50px 120px;border-collapse:separate; border-spacing:20px 20px;">
					<tr>
						<td ><h4>书号</h4></td>
						<td ><h4>类别</h4></td>
						<td ><h4>书名</h4></td>
						<td ><h4>出版社</h4></td>
						<td ><h4>年份</h4></td>
						<td ><h4>作者</h4></td>
						<td ><h4>价格</h4></td>
						<td ><h4>数量</h4></td>
					</tr>
					<tr>
						<td ><input type = "text" name = "a1" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "b1" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "c1" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "d1" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "1" name = "e1" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "f1" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "0.01" name = "g1" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "1" name = "h1" style = "width:100px;height:30px;"></td>
					</tr>
					<tr>
						<td ><input type = "text" name = "a2" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "b2" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "c2" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "d2" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "1" name = "e2" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "f2" style = "width:100px;height:30px;"></td>	
						<td ><input type = "number" min = "0" step = "0.01" name = "g2" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "1" name = "h2" style = "width:100px;height:30px;"></td>
					</tr>
					<tr>
						<td ><input type = "text" name = "a3" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "b3" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "c3" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "d3" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "1" name = "e3" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "f3" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "0.01" name = "g3" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "1" name = "h3" style = "width:100px;height:30px;"></td>
					</tr>
					<tr>
						<td ><input type = "text" name = "a4" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "b4" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "c4" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "d4" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "1" name = "e4" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "f4" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "0.01" name = "g4" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "1" name = "h4" style = "width:100px;height:30px;"></td>
					</tr>
					<tr>
						<td ><input type = "text" name = "a5" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "b5" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "c5" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "d5" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "1" name = "e5" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "f5" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "0.01" name = "g5" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "1"" name = "h5" style = "width:100px;height:30px;"></td>
					</tr>
					<tr>
						<td ><input type = "text" name = "a6" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "b6" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "c6" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "d6" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "1" name = "e6" style = "width:100px;height:30px;"></td>
						<td ><input type = "text" name = "f6" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "0.01" name = "g6" style = "width:100px;height:30px;"></td>
						<td ><input type = "number" min = "0" step = "1" name = "h6" style = "width:100px;height:30px;"></td>
					</tr>
					<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><input type = "button" value = "提交" onclick = "PostData_1()" class="btn"><td></tr>					
				</table>
			</form>
			<br/>
			<hr/>
			<br/>
			<h1 style="margin-left: 40px;">批量入库</h1>
			<form id = "form2" action="##" method="post" style="margin-left: 300px;margin-top: 20px;">
				<label><font size="5">请输入文本地址:</font></label><input type="text" name="url" style="width: 400px;height: 30px;margin-left: 20px;"><input type="button" value="提交" onclick = "PostData_2()" class="btn" style="margin-left: 20px;">
			</form>
	</body>
</head>