<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>user</title>
</head>

<body>
	<p style="color: brown">田书宇的作业</p>
	<?php

	interface User
	{
		public function getPrice($price);
	}

	class NormalUser implements User
	{
		private $discount = 0.95;
		public function getPrice($price)
		{
        return $price*$this->discount;
		}

	}

	class VipUser implements User
	{
		private $discount = 0.7;
		public function getPrice($price)
		{
        return $price*$this->discount;
		}

	}

	class InnerUser implements User
	{
		private $discount = 0.5;
    
		public function getPrice($price)
		{
        return $price*$this->discount;
		}

	}

	$price = 888;
	$norm = new NormalUser();
	$vip = new VipUser();
	$inner = new InnerUser();
	
echo "商品原价为888元<br>";
echo "普通用户支付:".$norm->getPrice($price)."元"."<br>";
echo "会员用户支付:".$vip->getPrice($price)."元"."<br>";
echo "内部用户支付:".$inner->getPrice($price)."元"."<br>";
	?>
</body>
</html>