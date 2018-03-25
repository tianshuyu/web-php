<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>string-homework</title>
</head>

<body>
	<?php
	echo "田书宇的作业<br>";
	function getfile_Extensions($str)
	{
		$ext=explode('.',$str);
		echo "后缀名是：". "$ext[1]"."<br>";
	}
	$str="abcd.txt";
	getfile_Extensions($str);
	
	
	function array_scince($num)
	{
		echo number_format($num)."<br>";
	}
	$num=23145678;
	array_scince($num);
	
	function string_combine($arr)
	{
		$aa=explode('_',$arr);
		for($i=0;$i<count($aa);$i++){
        $aa[$i][0] =  strtoupper($aa[$i][0]);
    }
    
		echo implode ($aa)."<br>";	
	}
	$string1="hello_world";
	$string2="rem_by_id";
	string_combine($string1);
	string_combine($string2);
	?>
</body>
</html>