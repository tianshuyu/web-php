<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>number base conversion</title>
</head>

<body>
	<form action="number base conversion.php" method="post">
	<input name="num1" type="text" value="<?php if (!empty($_POST)) echo $_POST['num1']?> "/>
	<select name="ysf" id="ysf">
		<option value="to2" <?php if (!empty($_POST))if($_POST['ysf']=='to2')echo "selected" ?>>10转2</option>
        <option value="to8" <?php if (!empty($_POST))if($_POST['ysf']=='to8')echo "selected" ?>>10转8</option>
        <option value="to16" <?php if (!empty($_POST))if($_POST['ysf']=='to16')echo "selected" ?>>10转16</option>
        <option value="2to" <?php if (!empty($_POST))if($_POST['ysf']=='2to')echo "selected" ?>>2转10</option>
		<option value="8to" <?php if (!empty($_POST))if($_POST['ysf']=='8to')echo "selected" ?>>8转10</option>
	    <option value="16to" <?php if (!empty($_POST))if($_POST['ysf']=='16to')echo "selected" ?>>16转10</option>
    </select>
	
	<input type="submit" value="计算" style="background-color:dodgerblue "  name="sub">
	
	<input type="button" value="清空" style="background-color:dodgerblue ">
	
	<span id="result">
<?php
	error_reporting(0);  

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
	if($_POST["ysf"]=="to2")
        $num2 = decbin($num1);
    if($_POST["ysf"]=="to8")
        $num2 = decoct($num1);
    if($_POST["ysf"]=="to16")
        $num2 = dechex($num1);
    if($_POST["ysf"]=="2to")
        $num2 = bindec($num1);
    if($_POST["ysf"]=="8to")
        $num2 = octdec($num1);		
    if($_POST["ysf"]=="16to")
        $num2 = hexdec($num1);
		 
?>
	</span>
	<input type="text" name="num2" value="<?php if(isset($_POST["sub"]))  echo $num2; ?>"/>
	</form>
	<script>
     var $button = document.querySelector("input[type=button]");//返回清空按钮
    var $result = document.querySelector("#result");//返回结果
    var $all = document.querySelectorAll("input[type=text]");//返回所有输入值
    var $plus = document.querySelector("#ysf").getElementsByTagName("option")[0];//ysf并且按顺序返回
    $button.onclick = function () {
        $result.innerHTML = "";//返回resul的表格行HTML
        for (var a in $all) {
            $all[a].value = "";
        }
        $plus.setAttribute("selected",true);
    }
</script>
</body>
	
</html>