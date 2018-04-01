<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>session_and_cookie 1</title>
</head>

<body>
	<p style="color: coral">田书宇的作业</p>
	<?php
    session_start();
    ?>


<style>
    .inline {
        display: inline-block;
		width: 100px
		float:left;
    }
    
	h3{
		color: cornflowerblue;
		
	}
	
</style>
<p style="color: brown">this is page one</p>
<form action="session_and_cookie 2.php" id="session" method="post" target="black">
    <h3>Session 登录入口</h3>
    <input type="text" name="s_save" id="s_save" value="0" style="display: none">
    <div class="inline">
        <span>用户名:</span>
        <input type="text" name="s_username"  value="">
    </div>
    <div class="inline">
        <span>密码:</span>
        <input type="password" name="s_password"   value="">
    </div>
    <input type="submit" style="background-color: deepskyblue">
</form>
<form action="session_and_cookie 3.php" id="cookie" method="post" target="black">
    <h3>Cookie 登录入口</h3>
    <input type="text" name="c_save" id="c_save" value="0" style="display: none">
    <div class="inline">
        <span>用户名:</span>
        <input type="text" name="c_username"  value="">
    </div>
    <div class="inline">
        <span>密 码:</span>
        <input type="password" name="c_password"  value="">
    </div>
    <input type="submit" style="background-color: deepskyblue">
</form>
<script>
    var $session = document.querySelector("#session");
    var $s_save =document.querySelector("#s_save");
    $session.onchange=function () {
        $session.onsubmit=function () {
            if(confirm("是否保留密码?")){
                $s_save.value= "1";
                alert("提交成功!");
                return true;
            }
            else{
                alert("提交失败!");
                return false;
            }
        }
    };
    var $cookie = document.querySelector("#cookie");
    var $c_save =document.querySelector("#c_save");
    $cookie.onchange=function () {
        $cookie.onsubmit=function () {
            if(confirm("是否保留密码?")){
                $c_save.value= "1";
                alert("提交成功!");
                return true;
            }
            else{
                alert("提交失败!");
                return false;
            }
        }
    }

</script>

</body>
</html>