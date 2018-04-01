<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>session_and_cookie 3</title>
</head>

<body>
	<p style="color: brown">this is page three</p>
	<?php

	session_start();
	if($_POST['c_save']=='1')
    if(isset($_POST['c_username'])){
        if(isset($_POST['c_password'])){
            setcookie('username',$_POST['c_username'],time()+3600);
            setcookie('password',$_POST['c_password'],time()+3600);
			
        }
        else{
            echo "密码不能为空";
        }
    }
    else{
        echo "用户名不能为空";
    }
	echo $_COOKIE['username'];
	echo "<br>";
	echo $_COOKIE['password'];
?>
</body>
</html>