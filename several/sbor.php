<html>
<head>
<meta charset="windows-1251">
</head>
<?php
$fp=file_get_contents("http://vtorrente.biz/browse.php"); 
echo ($fp);
file_put_contents('files\mycopy.html',$fp);
fclose($fp);
$fp='files\mycopy.html';
if(file_exists($fp))
{
echo('���� ����');
}
else
{
echo('�����  ���');	
exit();
}	
?>
</html>
