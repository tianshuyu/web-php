<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>insert</title>
	<style>
	.form
		{
			width: 300px;
			height: auto;
			padding: 50px;
			
		}
		.title
		{
			text-align: center;
			font-size: 20px;
			
		}
		.div
		{
			text-align:left;
			width: 100%;
            padding: 4px 2px;
            border:none;
            outline: none;
            margin-bottom: 10px;
			align-content: center;
		}
		
		</style>
</head>

<body>
	<form class="form" action="insert_1.php" method="post">
		<div class="title">用户申请</div>
		<div class="div" >用户名&nbsp;&nbsp;&nbsp;
			<input type="text" name="user_name" value="<?php if (!empty($_POST)) echo $_POST['user_name']?>">
		</div>
		<div class="div">密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="password" name="password" value="<?php if (!empty($_POST)) echo $_POST['password']?>">
		</div>
		<div class="div">学校&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="school" value="<?php if (!empty($_POST)) echo $_POST['school']?>">
		</div>
		<div class="div">真实姓名
			<input type="text" name="real_name" value="<?php if (!empty($_POST)) echo $_POST['real_name']?>">
		</div>
		<div class="div">家庭地址	
			<input type="text" name="address" value="<?php if (!empty($_POST)) echo $_POST['address']?>">
		</div>
		<div class="div" >问题&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<select >
			<option>你的父亲的生日</option>
			<option>你的母亲的生日</option>
			<option>你的儿子的生日</option>
			<option>你的女儿的生日</option>
		</select>
			<div class="div" >答案&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="answer" value="<?php if (!empty($_POST)) echo $_POST['answer']?>">
			</div>
			<div class="div">邮箱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="email" value="<?php if (!empty($_POST)) echo $_POST['email']?>">
			</div>
			<input type="submit" value="提交" style="background-color:dodgerblue "  name="sub">
			<input type="reset" value="重置" style="background-color:dodgerblue ">
		</div>
	</form>
	<?php
	error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$user_name=$_POST["user_name"];
$pass_word=$_POST["password"];
$user_school=$_POST["school"];
$real_name=$_POST["real_name"];
$user_address=$_POST["address"];
$user_email=$_POST["email"];
 if(isset($_POST["sub"]))
 {
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$sql = "INSERT INTO information (user_name,password, school,real_name,address,email)
VALUES ('$user_name', '$pass_word', '$user_school','$real_name','$user_address','$user_email')";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 }
?>
</body>
</html>