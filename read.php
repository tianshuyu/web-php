<?php
$con=mysqli_connect("localhost","root","","student");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM information");

while($row = mysqli_fetch_array($result))
{
    echo $row['user_name'] . "     " .$row['password']."     ".$row['school']."     ".$row['real_name']."     ".$row['address']."     ". $row['email'];
    echo "<br>";
}
?>