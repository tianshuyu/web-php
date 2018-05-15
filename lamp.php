<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>lamp up or down</title>
</head>

<body>
<?php
	define ("D1",1);
	define ("D2",2);
	define ("D3",4);
	define ("D4",8);
	define ("D5",16);
	$state=10;
	if( ($state & D1)>0){
		echo "第一个灯是亮的<br/>";
	}
	else{
		echo "第一个灯是黑的<br/>";
	}
	if( ($state & D2)>0){
		echo "第二个灯是亮的<br/>";
	}
	else{
		echo "第二个灯是黑的<br/>";
	}
	function showlamp(){
		echo "<p>";
		for($i=1;$i<=5;$i++){
			$s="D".$i;
			if(($GLOBALS['state']& constant($s))>0){
				echo"灯{$i}亮";
			}
			else{
				echo"灯{$s}暗";
			}
		}
		echo"<p>";
	}
	showlamp();
	?>
</body>
</html>