<?php
if(($num1== "")||(num2== "")||(op== ""))
{
header("location:http://localhost/otherscripts/myway.html");
exit();
}
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$op=$_POST['op'];
if ($op=="�������")
{
$result=$num1+$num2;
}
elseif ($op=="�������")
{
$result=$num1-$num2;
}
elseif($op=="��������")
{
$result=$num1*$num2;
}
elseif(($op=="���������")&&($num2!=0))
{
$result=$num1/$num2;
}
elseif((op=="���������")&&(num2==0)) 
{
$result.='������ ������ �� 0';
}
?>
<html>
<head>
<title>
���������� �����������
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