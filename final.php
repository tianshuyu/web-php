<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>final</title>
</head>

<body>
	<p style="color: darkred">田书宇的作业</p>
	<?php
	const pi = 3.14;
Final class Circle{
	
    public static function get_circum($radius){
        return $radius*2*constant("pi");
    }
    public static function get_square($radius){
        return $radius*$radius*constant("pi");
    }
}
	$Circle1 = new Circle();
	echo "半径为5的圆周长：".$Circle1->get_circum(5)."<br>";
	echo "半径为6的圆面积：".$Circle1->get_square(6)."<br>";
	
	
	class Stu
	{
		private $name,$sex,$number,$classroom;
		public function __construct()
		{
			$this->name="tsy";
			$this->sex="male";
			$this->number="16222521";
			$this->classroom="16222512";
		    echo $this->name."<br>".$this->sex."<br>".$this->number."<br>".$this->classroom."<br>";
		}
		
		public function __set($name, $value)
		{
			$this->$name = $value;
		}
    
        public function __get($name)
        {
            return isset($this->$name) ? $this->$name : null;
        }
        public function __unset($name)
        {
            unset($this->$name);

        }
        public function __isset($name)
        {
            return isset($this->$name);
        }
        public function getinfo()
		{
            echo "姓名:".$this->name."<br>";
            echo "性别:".$this->sex."<br>";
            echo "学号:".$this->number."<br>";
            echo "班级:".$this->classroom."<br>";
        }
        public function __call($name, $arguments)
        {
            echo $name." does not exist:"."<br>";
        }
		
	}
$student = new Stu();
$student->name ="无感";
echo $student->name."<br>";
if(isset($student->classroom))
    unset($student->classroom);
$student->getinfo();
$student->name('name');
 ?>
</body>
</html>