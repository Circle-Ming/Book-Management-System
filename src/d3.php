<!DOCTYPE html>
<html>
<head>
</head>
<body>  
    <style type="text/css">
    .btn
    {
        width: 60px;
        height: 30px;
        border: 0;
        background-color: rgba(0, 0, 0, 0.8);
        font-size: 10px;
        color: white;
    }
    
    </style>
    <form method="post" style="margin-top: 50px;margin-left: 20px">
        <label>借书证卡号:<input type="text" name="cno"></label>
        <br/><br/>
        <label>图书的书号:<input type="text" name="bno"></label>
        <br/><br/> 
        <label>管理员用户名:<input type="text" name="borrow_administrator"></label>
        <br/><br/>
        <hr/>
        <br/>
        <button type="submit" name="select_borrow_information" class="btn">借书记录</button>
        <br/><br/>
        <button type="submit" name="borrow_book" class="btn">借书</button>
    </form>
        <br/>
        <hr/>
        <br/>
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
    		echo"<script>alert('数据库连接失败');</script>";
            mysqli_close($conn);
    		exit();
    	}
    	else{
         	   if (isset($_POST['select_borrow_information'])) {
         	   $query = "select * from card where cno='{$_POST['cno']}'";
         	   $result = mysqli_query($conn, $query);
         	   $rcount = mysqli_num_rows($result);
         	   if ($rcount >= 1) {
        ?>
        <p><h4>历史借书记录：</h4></p>
        <table border = "1px" style = "margin-top: 20px;margin-left: 20px;width: 800px;">
            <thead>
                <tr>
                    <th style = "width: 200px;height: 30px"><h4>书号</h4></th>
                    <th style = "width: 200px;height: 30px"><h4>书名</h4></th>
                    <th style = "width: 200px;height: 30px"><h4>借书日期</h4></th>
                    <th style = "width: 200px;height: 30px"><h4>还书日期</h4></th>
                </tr>
            </thead>
        <?php
                	$query1 = "select * from borrow inner join book on borrow.bno = book.bno  where borrow.cno='{$_POST['cno']}' and borrow.return_situation='1' ";
                	$result1 = mysqli_query($conn, $query1);
                	while (mysqli_fetch_row($result1)) {
                        $num3 = mysqli_result($result1, 'bno');
                        $num4 = mysqli_result($result1, 'title');
                        $num5 = mysqli_result($result1, 'borrow_date');
                        $num6 = mysqli_result($result1, 'return_date');
                        $num4 = iconv('GB2312', 'UTF-8', $num4);
        ?>
                <tr>
                    <td style = "width: 200px;height: 30px"><?php echo $num3;?></td>
                    <td style = "width: 200px;height: 30px"><?php echo $num4;?></td>
                    <td style = "width: 200px;height: 30px"><?php echo $num5;?></td>
                    <td style = "width: 200px;height: 30px"><?php echo $num6;?></td>                                        
                </tr>
        <?php
                	}
        ?>
        </table>
        <br/>
        <hr/>
        <br/>
        <p><h4>未还书记录：</h4></p>
        <table border = "1px" style = "margin-top: 20px;margin-left: 20px;width: 800px;">
            <thead>
                <tr>
                    <th style = "width: 200px;height: 30px"><h4>书号</h4></th>
                    <th style = "width: 200px;height: 30px"><h4>书名</h4></th>
                    <th style = "width: 200px;height: 30px"><h4>借书日期</h4></th>
                    <th style = "width: 200px;height: 30px"><h4>还书日期</h4></th>
                </tr>
            </thead>
        <?php
                	$query2 = "select book.bno,book.title,borrow.borrow_date,borrow.return_date from borrow inner join book on book.bno = borrow.bno where borrow.cno='{$_POST['cno']}' and borrow.return_situation='0'";
                	$result2 = mysqli_query($conn, $query2);
                	while (mysqli_fetch_row($result2)) {
                        $num3 = mysqli_result($result2, 1);
                        $num4 = mysqli_result($result2, 2);
                        $num5 = mysqli_result($result2, 3);
                        $num6 = mysqli_result($result2, 4);
                        $num4 = iconv('GB2312', 'UTF-8', $num4);
        ?>
                <tr>
                    <td style = "width: 200px;height: 30px"><?php echo $num3;?></td>
                    <td style = "width: 200px;height: 30px"><?php echo $num4;?></td>
                    <td style = "width: 200px;height: 30px"><?php echo $num5;?></td>
                    <td style = "width: 200px;height: 30px"><?php echo $num6;?></td>                                        
                </tr>
        <?php
                	}
            }
            else {
                echo "<script>alert('该用户不存在！')</script>";
                mysqli_close($conn);
                return;
            }
        }

        if (isset($_POST['borrow_book'])) {
            $query = "select * from card where cno='{$_POST['cno']}'";
            $result = mysqli_query($conn, $query);
            $rcount = mysqli_num_rows($result);
            if ($rcount >= 1) {
                $query7 = "select * from admininfo where name='{$_POST['borrow_administrator']}'";
                $result7 = mysqli_query($conn, $query7);
                $rcount7 = mysqli_num_rows($result7);
                if($rcount7 >= 1)
                {
                    $query3 = "select stock from book where bno= '{$_POST['bno']}' ";
                    $result3 = mysqli_query($conn, $query3);
                    mysqli_fetch_row($result3);
                    $number = mysqli_result($result3, 'stock');
                    if ($number >= 1) {
                        $query_extra = "select * from borrow where cno = '{$_POST[cno]}' and return_situation = '0'";
                        $result_extra = mysqli_query($conn, $query_extra);
                        $result_sum = mysqli_num_rows($result_extra);
                        if ($result_sum == 2) {
                            echo "<script>alert('一个同学一个学期不能同时借三本书！');</script>";
                            mysqli_close($conn);
                            return;
                        }
                        $query4 = "insert into borrow (cno,bno,borrow_date,return_date,return_situation,borrow_administrator) values('{$_POST['cno']}','{$_POST['bno']}',getdate(),dateadd(month, 3, getdate()),'0','{$_POST['borrow_administrator']}')";
                        $result4 = mysqli_query($conn, $query4);
                        $query5 = "update book set stock=stock-1 where bno='{$_POST['bno']}' ";
                        $result5 = mysqli_query($conn, $query5);
                        if ( $result5 == true && $result4 == true) {
                            echo "<script>alert('借书成功！');</script>";
                            mysqli_close($conn);
                            return;
                        }
                    } else {
                        $query6 = "select min(return_date) from borrow where bno= '{$_POST['bno']}'and return_date > getdate() ";
                        $result6 = mysqli_query($conn, $query6);
                        mysqli_fetch_row($result6);
                        $sql = mysqli_result($result6, 1);
                        echo "<script>alert('该书无库存！')</script>";
                        echo "最近还书日期为：$sql";
                        mysqli_close($conn);
                        return;
                    }
                }
                else
                {
                    echo "<script>alert('请输入正确的管理员id！')</script>";
                    mysqli_close($conn);
                    return;                   
                }
            }
            else {
                echo "<script>alert('该用户不存在！')</script>";
                mysqli_close($conn);
                return;
            }
        }
    }
    mysqli_close($conn);
    ?>
</body>
</html>  