<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>preg_match</title>
</head>

<body>
	<?php
	//邮箱
	function email_match($str)
	{
    if(preg_match("/^(\w)+@(\w)+\.(com|net|org)$/",$str))
	{
        echo "是邮箱的表达方式"."<br>";
        return true;
    }
    echo "不是邮箱的表达方式"."<br>";
    return false;
}

$mail = "990979281@qq.com";
email_match($mail);

//国内电话和手机


function tel_match($tel)
{
    if(preg_match("/^((\+86)?(1\d{10}))$|(\d{3,4}-\d{7,8})$/",$tel))
	{
        echo "是国内手机号的表达方式"."<br>";
        return true;
    }
    echo "不是手机号的表达方式"."<br>";
    return false;
}

$tel = "17781165259";
tel_match($tel);


//密码匹配的正则表达式,字母开头,6-18位
function pwd_match($pwd)
{
    if(preg_match("/^[a-zA-Z]\w{5,17}$/",$pwd))
	{
        echo "合法密码"."<br>";
        return true;
    }
    echo "非法密码"."<br>";
    return false;
}

$pwd = "tsy990979281";
pwd_match($pwd);

//匹配16进制颜色值
//#4f3a45

function color_match($color)
{
    if(preg_match("/#([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/",$color)){
        echo "合法颜色"."<br>";
        return true;
    }
    echo "非法颜色"."<br>";
    return false;
}

$color = "#f24333";
color_match($color);

//数字每个四位就用空格分割

function explodeNum($num)
{ 
    if($num = preg_replace("/(\d{4})/i","\\1 ",$num)){
        echo "添加空格成功: ".$num."<br>";
        return true;
    }
}
$num= 990979281;
explodeNum($num);
	?>
</body>
</html>