<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>car</title>
</head>

<body>
	<p style="color: orangered">田书宇的作业</p>
	<?php
	class car
	{
		private $type,$color;
		public function __construct()
		{
        $this->type="BMW_X8";
        $this->color="black";
			
    }
    
    public function __toString()
    {
           return "该车的型号:".$this->type."<br>"."该车的颜色:".$this->color."<br>";
    }
    public  function  __set($name, $value)
    {
        $this->$name =$value;
        
    }
    public  function  __get($name)
    {
        return isset($this->$name) ? $this->$name : null;
    }
}

$car = new Car();
$car->type = "BMW_X7";
$car->color ="blue";
echo $car;
	
	
	class Bus extends Car{
    private  $load;
    public function __construct()
    {
        parent::__construct();
        $this->load = 20;
		
    }
		
    public function __toString()
    {
        return "该车共载人数:".$this->load."<br>".parent::__toString();
    }
}

$bus=new Bus();
echo $bus;

?>
</body>
</html>