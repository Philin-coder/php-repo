<html>
<head>
<meta charset="windows-1251">
<title>
����� ip
</title>
</head>
<body bgcolor="black" text="yellow">
<div align="center"><p><?php
$adress=getenv("REMOTE_ADDR");
echo("��� ip ���: $adress");
?></p></div>
<?php
//echo "$adress";
$fp=fopen('files\ip.txt','w' );
fwrite($fp,"$adress");
fclose($fp);
if(file_exists($fp))
{
echo "���� ����";
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
$result="�� ����������� ������� Microsoft internet Explorer";
}	
elseif(preg_match("/Mozilla/i","$agent"))
{
$result="�� ����������� ������� Netscape";
}
elseif(preg_match("/Google/i","$agent"))
{
$result="����������� ������";
}
else 
{	
echo "�� ����������� $agent";
}
?>
<br>
<?php    
echo "<p>$result </p>";
?>
</body>
</html>