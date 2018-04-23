<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>calculator</title>
	<style>
		.form
		{
			width: 300px;
			height: auto;
			padding: 50px;
			box-shadow: aqua 0 0 6px 6px;
            border: black 6px solid;
		}
		.title
		{
			text-align: center;
			font-size: 20px;
		}
		.div
		{
			text-align:left;
			width: 100%;
            padding: 4px 2px;
            border:none;
            outline: none;
            margin-bottom: 10px;
		}
	

		
	</style>
</head>
    
<body>
	<p style="color: darkorange">田书宇的作业</p>

	<form  class="form" action="calculator.php" method="post" >
		<div class="title" >php版--简单计算器</div>
		<div class="div" >请输入第一个数
			
		<input  type="text" name="num1" size="20px" value="<?php if (!empty($_POST)) echo $_POST['num1']?>">
			
		</div>
		<div class="div">请输入第二个数
			
		<input type="text" name="num2" size="20px" value="<?php if (!empty($_POST)) echo $_POST['num2']?>">
			
		</div>
		<div class="div">请选择运算符&nbsp;&nbsp;&nbsp;
			
		<select name="ysf" id="ysf">
            <option value="+" <?php if (!empty($_POST))if($_POST['ysf']=='+')echo "selected" ?>>+</option>
            <option value="-" <?php if (!empty($_POST))if($_POST['ysf']=='-')echo "selected" ?>>-</option>
            <option value="*" <?php if (!empty($_POST))if($_POST['ysf']=='*')echo "selected" ?>>*</option>
            <option value="/" <?php if (!empty($_POST))if($_POST['ysf']=='/')echo "selected" ?>>/</option>
        </select>
			
		</div>
		<input type="submit" value="计算" style="background-color:dodgerblue "  name="sub">
        <input type="button" value="清空" style="background-color:dodgerblue ">
	<span id="result">
	 <?php
     error_reporting(0);  

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    if($_POST["ysf"]=="+")
        $sun = $num1+$num2;
    if($_POST["ysf"]=="-")
        $sun = $num1-$num2;
    if($_POST["ysf"]=="*")
        $sun = $num1*$num2;
    if($_POST["ysf"]=="/")
        $sun = $num1/$num2;
		
		  if(isset($_POST["sub"]))
        echo $sun;
    ?>
	</span>
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