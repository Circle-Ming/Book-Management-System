<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>注册</title>
        <style type="text/css">
            body
            {
                background:#2d3b36 url(2.jpg)no-repeat center center fixed;
                -webkit-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                padding-top:20px;
            }
            .co{color:white;} 
            form
            {   
                margin-top: 100px;
                margin-left:auto;
                margin-right:auto;
                width:450px;
                height: 450px;
                padding:30px;
                border: 1px solid rgba(0,0,0,.2);
                -webkit-border-radius: 5px;
                border-radius: 5px; 
                -webkit-background-clip: padding-box;
                background-clip: padding-box;
                background: rgba(0, 0, 0, 0.5); 
                -webkit-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
                box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
                overflow: hidden; 
            }
            input 
            {
                width: 276px;
                height: 48px;
                border: 1px solid rgba(255,255,255,.4);
                -webkit-border-radius: 4px;
                border-radius: 4px;
                -webkit-background-clip: padding-box;
                background-clip: padding-box; 
                display:block;
                color:#fff;
                padding-left:20px;
                padding-right:20px;
                margin-bottom:20px;
            }

            input.name {
                  background: rgba(255, 255, 255, 0.4)  no-repeat scroll 16px 16px;
                  width:350px; 
                 padding-left:45px;
            }

            input.pw {
                  background: rgba(255, 255, 255, 0.4) no-repeat scroll 16px 20px;
                  width:350px; 
                  padding-left:45px;
            }
            .btn 
            {
                width: 100px;
                height: 44px;
                -webkit-border-radius: 4px;
                border-radius: 4px;
                float:right;
                border: 1px solid #253737;
                background: #0B346E;
                background: -webkit-gradient(linear, left top, left bottom, from(#0B346E), to(#6E75A4));
                background: -webkit-linear-gradient(top, #0B346E, #6E75A4);
                background: -moz-linear-gradient(top, #0B346E, #6E75A4);
                padding: 0px 0px;
                margin-right: 40px;
                -webkit-border-radius: 6px;
                border-radius: 6px;
                -webkit-box-shadow: rgba(255,255,255,0.1) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
                box-shadow: rgba(255,255,255,0.1) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
                text-shadow: #333333 0 1px 0;
                color: #e1e1e1;
            }
        </style>
    </head>

    <body>

        <form method = "post">
                <label class = "co"><h3>用户:</h3><input  type = "text" name="name" class="name"/></label>
                <label class = "co"><h3>密码:</h3><input type = "password" name="pw" class="pw"/></label>
                <label class = "co"><h3>重复密码:</h3><input type = "password" name="repw" class="pw"/></label>
                <button name="submit"  type="submit" class = "btn">注册</button>                
                <button name="login"  type="submit" class = "btn">返回登录界面</button>
        </form>

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
        if (isset($_POST['login'])){
        header("Location:login.php");
        }
        if (isset($_POST['submit'])){
            if ($_POST['pw'] == $_POST['repw']){
                $query = "insert into userInfo (name,pw) values('{$_POST['name']}','{$_POST['pw']}')";
                $result=mysqli_query($conn, $query);
                if($result==true){
                    echo "<script>alert('注册成功！将返回登录界面');parent.location.href='login.php';</script>";
                    return;
                }
                else{
                    echo "<script>alert('该用户名已被注册！')</script>";
                }
    
            }else {
                echo "<script>alert('两次输入密码不一致！')</script>";
            }
        }
    }
?>
    </body>
</html>