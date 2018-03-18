<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Array_question</title>
</head>

<body>
	<?php
	echo "  田书宇的数组作业";
	echo "<br>";
	//创建数组长度为10的递增数组，首项为1
	function create_array($first,$leap,$lenth)
	{
		$array_1 = array();
        for ($i = $first, $j = 1; $j <= $lenth; $i += $leap, $j++) {
        array_push($array_1, $i);
	}
		return $array_1;
	}
	$a=create_array(1,3,10);
	print_r($a);
	
	
	//随机生成数，求数组最大值下标
	function find_max_sub($array_2)
	{
		if (empty($array_2)) return -1;
        $sub = 0;
        $max = $array_2[0];
        for ($i = 0; $i < count($array_2); $i++) {
            if ($array_2[$i] >= $max) {
                $sub = $i;
                $max = $array_2[$i];
        }
    }
        return $sub;
	}
	function create_array_2()
	{
		$b=array();
		for($i=0;$i<10;$i++){
			$j=rand()%100;
			array_push($b,$j);
		}
		return $b;
	}
	$array_2= create_array_2();
	echo "<br>"."<br>";
	print_r($array_2);
	echo "<br>" . find_max_sub($array_2);

//求数组中最大数和最小数的差
	$array_3=create_array_2();
	function max_sub_min($array_3)
	{
		if (empty($array_3)) return -1;
        sort($array_3);
        $min = $array_3[0];
        $max = $array_3[count($array_3) - 1];
        return ($max - $min);
	}
	echo "<br>"."<br>";
	print_r($array_3);
	echo "<br>";
	echo max_sub_min($array_3);
	
	
	//数组逆序存放

     function reverse($array_3)
	 {
		 
         krsort($array_3);
         return $array_3;
     }
	echo "<br>"."<br>";
    print_r(reverse($array_3));
	
	?>
</body>

</html>