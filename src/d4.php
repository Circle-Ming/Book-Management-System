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
        <label>管理员用户名:<input type="text" name="return_administrator"></label>
        <br/><br/>
        <hr/>
        <br/>
        <button type="submit" name="select_borrow_information" class="btn">借书记录</button>
        <br/><br/>
        <button type="submit" name="return_book" class="btn">还书</button>
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

            if (isset($_POST['return_book'])) {
                $query = "select * from card where cno='{$_POST['cno']}'";
                $result = mysqli_query($conn, $query);
                $rcount = mysqli_num_rows($result);
                if ($rcount >= 1) {
                    $query7 = "select * from admininfo where name='{$_POST['return_administrator']}'";
                    $result7 = mysqli_query($conn, $query7);
                    $rcount7 = mysqli_num_rows($result7);
                    if($rcount7 >= 1)
                    {
                        $query3 = "select * from borrow where cno= '{$_POST['cno']}' and bno='{$_POST['bno']}' and return_situation=0 ";
                        $result3 = mysqli_query($conn, $query3);
                        $rcount3 = mysqli_num_rows($result3);
                        if ($rcount3>= 1) {
                            $query4 = "update borrow set return_date=getdate(),return_situation='1',return_administrator='{$_POST['return_administrator']}'  where cno= '{$_POST['cno']}' and bno='{$_POST['bno']}'
                               and borrow_date in (select min_date from(select min(borrow_date) as min_date from borrow 
                               where cno= '{$_POST['cno']}' 
                               and bno='{$_POST['bno']}' 
                               and return_situation='0') tb1)";
                            $query5 = "update book set stock=stock+1 where bno='{$_POST['bno']}' ";
                            $result4 = mysqli_query($conn, $query4);
                            $result5 = mysqli_query($conn, $query5);
                            if ($result4 == true && $result5 == true) {
                                echo "<script>alert('还书成功！');</script>";
                                mysqli_close($conn);
                                return;
                            }
                        }
                        else {
                            echo "<script>alert('还书失败！')</script>";
                            mysqli_close($conn);
                            return;
                        }
                }
                else {
                    echo "<script>alert('请输入正确的管理员id！')</script>";
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