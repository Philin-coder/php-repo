<?php
if(($num1== "")||(num2== "")||(op== ""))
{
header("location:http://localhost/otherscripts/myway.html");
exit();
}
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$op=$_POST['op'];
if ($op=="Сложить")
{
$result=$num1+$num2;
}
elseif ($op=="Вычесть")
{
$result=$num1-$num2;
}
elseif($op=="Умножить")
{
$result=$num1*$num2;
}
elseif(($op=="Разделить")&&($num2!=0))
{
$result=$num1/$num2;
}
elseif((op=="Разделить")&&(num2==0)) 
{
$result.='нельзя делить на 0';
}
?>
<html>
<head>
<title>
собственно калькулятор
</title>
</head>
<body bgcolor="red"  text="yellow"> 
<p><?php 
if($result) 
{
echo $result;
}
?></p>
</body>
</html>