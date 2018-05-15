<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>paging</title>
</head>

<body>
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// 创建连接
$con = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($con->connect_error) {
    die("连接失败: " . $con->connect_error);
} 
   
  $pageSize = 2;   //每页显示的数量
  $rowCount = 0;   //要从数据库中获取
  $pageNow = 1;    //当前显示第几页

	
  //如果有pageNow就使用，没有就默认第一页。
  if (!empty($_GET['pageNow'])){
    $pageNow = $_GET['pageNow'];
  }
   
  $pageCount = 0;  //表示共有多少页
   
  $sql1 = "select count(class_id) from class";
  $res1 =$con->query($sql1);
   //echo "$res1";
  if($row1=mysqli_fetch_row($res1)){
    $rowCount = $row1[0];
	 /* printf("%d",$rowCount);
	  echo "<br>";*/
  } 
   
  //计算共有多少页，ceil取进1
  $pageCount = ceil(($rowCount/$pageSize));
   
	//$page =new Page();
  //使用sql语句时，注意有些变量应取出赋值。
  $pre = ($pageNow-1)*$pageSize;
   
  $sql2 = "select * from class limit $pre,$pageSize";
  $res2 = $con->query($sql2);
  //显示页码
	
  while($row=mysqli_fetch_assoc($res2)){
	echo $row['class_id']." ";
    echo $row['class_name']." ";
    echo $row['class_teacher']." ";
    echo $row['class_time']." ";
	echo $row['class_address']." ";
	  echo "<br>";
  }
	//printf("%s",$page_list);
	/*for ($i=1;$i<=$pageCount;$i++){
    echo "<a href='javascript : show('paging.php?pageNow=$i')'>$i</a> ";
  }*/
  for ($i=1;$i<=$pageCount;$i++){
    echo "<a href='paging.php?pageNow=$i'>$i</a> ";
  }
?>
</body>
</html>