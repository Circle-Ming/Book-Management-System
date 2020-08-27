<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
    form{
    	margin-top: 20px;
    	margin-left: 20px;
    }
	.btn
	{
		width: 60px;
		height: 30px;
		border: 0;
		background-color: rgba(0, 0, 0, 0.8);
		font-size: 20px;
		color: white;
	}
    
</style>
</head>
<body> 
	<form action = "d2_1.php" method="post">
    <label>选择查询类别:
        <input type="radio" name=content value="0"/>类别
        <input type="radio" name=content value="1"/>书名
        <input type="radio" name=content value="2"/>出版社
        <input type="radio" name=content value="3"/>作者
        <input type="radio" name=content value="4"/>无
        <br/><br/>
        <label>内容:<input type="text" name="cont"></label>
        <br/><br/>
        <hr />
        <br/>
        <label>选择查询选项:
        <input type="radio" name=section value="0"/>年份
        <input type="radio" name=section value="1"/>价格
            <input type="radio" name=section value="2"/>无
        <br/><br/>
        <label>范围:<input type="text" name="cont1"></label> —— <label><input type="text" name="cont2"></label>
        <br/><br/>
        <hr />
        <br />
    <label>选择排序的依据:
        <input type="radio" name=attribute value="0"/>类别
        <input type="radio" name=attribute value="1"/>书名
        <input type="radio" name=attribute value="2"/>出版社
        <input type="radio" name=attribute value="3"/>年份
        <input type="radio" name=attribute value="4"/>作者
        <input type="radio" name=attribute value="5"/>价格
        <br/><br/>
        <label>选择排序顺序:
        <input type="radio" name=order value="0"/>正序
        <input type="radio" name=order value="1"/>逆序
            <br/><br/>
        <hr />
		<br />
    <input type="submit" name="select" value = "查询" class= "btn">
            <br/><br/>
	</form>
</body>
</html>