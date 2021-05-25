<html>
<head>
<meta charset="windows-1251">
<title>
вывод ip
</title>
</head>
<body bgcolor="black" text="yellow">
<div align="center"><p><?php
$adress=getenv("REMOTE_ADDR");
echo("ваш ip это: $adress");
?></p></div>
<?php
//echo "$adress";
$fp=fopen('files\ip.txt','w' );
fwrite($fp,"$adress");
fclose($fp);
if(file_exists($fp))
{
echo "файл есть";
}	
$content=file('files\ip.txt');
print '<p>';
print_r ($content);
print '</p>';
?>
<?php
$agent=getenv("HTTP_USER_AGENT");
if(preg_match("/MSIE/i","$agent"))
{
$result="Вы используете браузер Microsoft internet Explorer";
}	
elseif(preg_match("/Mozilla/i","$agent"))
{
$result="Вы используете браузер Netscape";
}
elseif(preg_match("/Google/i","$agent"))
{
$result="Пользуетесь хромом";
}
else 
{	
echo "Вы используете $agent";
}
?>
<br>
<?php    
echo "<p>$result </p>";
?>
</body>
</html>