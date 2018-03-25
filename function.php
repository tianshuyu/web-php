<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>funtion_practice</title>
</head>

<body>
	<?php
	echo "  田书宇的函数作业";
	echo "<br>";
	function reverse_Int($a,$b)
	{
		if($a<10)
		{
			return $b*10+$a;
		}
		else
		{
			return reverse_Int(floor($a/10),$b*10+$a%10);
		}
	}
	$rand=rand()%100000;
	echo "原来的整数 ：".$rand;
	echo "<br>";
	echo "改变后的整数 ：".reverse_Int($rand,0);
	echo "<br>";
	
//编写函数为fun(n),n为三位自然数，判断n是否为水仙花数，是返回1，否返回0
//求100-999内水仙花数
	function is_Narcissistic($n)
	{
		$hundred = floor($n/100);
        $ten = floor($n/10)-$hundred*10;
		$one = $n%10;
		if(pow($hundred, 3)+pow($ten,3)+pow($one,3)==$n){
			return 1;
	}
		else return 0;
	}
	function find_Narcissistic()
	{
	for($i=100;$i<1000;$i++)
	{
		$hundred = floor($i/100);
        $ten = floor($i/10)-$hundred*10;
		$one = $i%10;
		if(pow($hundred, 3)+pow($ten,3)+pow($one,3)==$i){
			return $i;
        }
        
    }

	}
	echo "<br>";
	echo "判断的两个数分别为：177和153";
	echo "<br>";
	echo "判断结果为：".is_Narcissistic(177). "    ". is_Narcissistic(153);
	echo "<br>";
	print_r(find_Narcissistic());
	
	//求某数是不是素数
    function isPrime($n)
	{
    if(gettype($n)!="integer"||$n<2)
	{
        return 0;
    }
    if($n==2||$n==3)
	{
        return 1;
    }
    $sq = ceil(sqrt($n));
    for($i=2;$i<=$sq;$i++)
	{
        if($n%$i==0)
		{
            return 0;
        }
    }
    return 1;
}
    echo "<br>";
	echo "判断是否为素数的数分别为：177和153";
    echo "<br>";
	echo "判断结果为：".isPrime(177)."    ".isPrime(153);
	echo "<br>";
	
	
	//求两个数的最大公约数、最小公倍数
	function getmax_divisor($c,$d)
	{
		$r=$c%$d;
		while($r)
		{
			$c=$d;
			$d=$r;
			$r=$c%$d;
		}
		return $d;
	}
	
	function getmin_multiple($c,$d)
	{
		return ($d/getmax_divisor($c,$d))*$c;
	}
	$c=rand()%100+10;
	$d=rand()%1000+10;
	echo "<br>";
	echo "两个数分别为：".$c."   ".$d;
	echo "<br>";
	echo "他们的最大公约数为：".getmax_divisor($c,$d);
	echo "<br>";
	echo "他们的最小公倍数为：".getmin_multiple($c,$d);
	
	
	$array=array("size"=>"XL","color"=>"gold");
	print_r(array_values($array));
	
	?>
</body>

</html>