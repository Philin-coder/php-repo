<?php
$fp=file_get_contents("http://jewishjokes.narod.ru/chelovekizakon.htm");
echo ($fp);
file_put_contents('files\my.txt',$fp);
fclose($fp);
$file='files\my.txt';
$newfile='files\my1.txt';
if(!copy ($file,$newfile))
{
echo("�� ������� ����������� ����");
}
if(file_exists($newfile))
{
echo("���� ��� ����");
exit();
}
else
{
echo('����� ���');
}
?>