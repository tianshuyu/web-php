<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>page_data</title>
</head>

<body>
<?php
header("content-type:text/html");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// 创建连接
$con = new mysqli($servername, $username, $password, $dbname);
// 检测连接
/*echo <<<eof
	<table>
	<tr><td>NO</td><td>kname</td><td>name</td><td>time</td><td>place</td></tr>
eof;*/
//引入分页类
include 'page_class.php';
if ($con->connect_error) {
    die("连接失败: " . $con->connect_error);
} 

if (!empty($_GET['pageNow'])){
    $pageNow = $_GET['pageNow'];
  }
   
  $pageCount = 0;  //表示共有多少页
   
  $sql1 = "select count(class_id) from class";
  $res1 =$con->query($sql1);
   if($row1=mysqli_fetch_row($res1)){
    $rowCount = $row1[0];//总条数
   }
	$total =$rowCount;//总条数
	$per=2;//每页条数
	$page= new Page($total,$per);//实例化
	//分页
	$sql2 = "select * from class ".$page->limit;
    $res2 = $con->query($sql2);
	//h获得页码信息
	$page_list = $page->fpage();
	
	
	while($row=mysqli_fetch_assoc($res2)){
	echo $row['class_id']." ";
    echo $row['class_name']." ";
    echo $row['class_teacher']." ";
    echo $row['class_time']." ";
	echo $row['class_address']." ";
	  echo "<br>";
  }
	printf("%s",$page_list);
	
	
	
 /* if($row1=mysqli_fetch_row($res1)){
    $rowCount = $row1[0];
  }*/
	?>
<body>
</body>
</html>
</body>
</html>