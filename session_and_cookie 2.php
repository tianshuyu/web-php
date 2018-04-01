<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>session_and_cookie 2</title>
</head>

<body>
	<p style="color: brown">this is page two</p>
	<?php
	session_start();
	if($_POST['s_save']=='1')
    if(isset($_POST['s_username'])){
        if(isset($_POST['s_password'])){
            $_SESSION['username']=$_POST['s_username'];
            $_SESSION['password']=$_POST['s_password'];
        }
        else{
            echo "密码不能为空";
        }
    }
    else{
        echo "用户名不能为空";
    }
	echo $_SESSION['username'];
	echo "<br>";		
	echo $_SESSION['password'];
?>
</body>
</html>