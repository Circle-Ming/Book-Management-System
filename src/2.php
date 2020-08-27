<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>浙大图书管理系统</title>
		<style> 
        
			*{margin:0; padding:0;}
			a{color:white;text-decoration:none;}
           .top_1
            {   
                height:50px;
                width:1550px;
                position:absolute;
                border: 1px solid rgba(0,0,0,.2);
                -webkit-border-radius: 5px;
                border-radius: 5px;
                -webkit-background-clip: padding-box;
                background-clip: padding-box;
                background: rgba(248, 195, 205, 0.1); 
                -webkit-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
                box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
                float:left;
            }
            .index
            {   
                border: 1px solid rgba(0,0,0, 0.2);
                -webkit-background-clip: padding-box;
                background-clip: padding-box;
                background: rgba(0, 0, 0, 0.8); 
                padding-top:100px;
                height:680px;
                width:200px;
                float: left;
                position:absolute;  
            }
            .main
            {
                margin-top:50px;
                margin-left:200px;
                height:730px;
                width:1350px;
                float: left;
                position:absolute;
            }
		</style>
	</head>
	<body margin:0px; padding:0px style = "position:relative;">
		<div class = "index">
			</br>
			<h3 align = "center"><a href = "d1.php" target = "tiaozhuan">图书入库</a></h3>
			</br>
			</br>
			<h3 align = "center"><a href = "d2.php" target = "tiaozhuan">图书查询</a></h3>
			</br>
			</br>
			<h3 align = "center"><a href = "d3.php" target = "tiaozhuan">借书</a></h3>
			</br>
			</br>
			<h3 align = "center"><a href = "d4.php" target = "tiaozhuan">还书</a></h3>
			</br>
			</br>
			<h3 align = "center"><a href = "d5.php" target = "tiaozhuan">借书证管理</a></h3>
			</br>
		</div>
        
		<div class = "main">
			<iframe src = "" name="tiaozhuan" frameborder = 0 height = 730 width = 1350px></iframe>
		</div>
        <div class = "top_1"></div>
	</body>
</html>
