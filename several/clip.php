<html> 
<head><title> ���� �� ��������</title></head>
<meta charset="windows-1251"> 
<body bgcolor="black" text="yellow" link="ivory" vlink="cyan" slink="red">
<p align="center">����� � ������� </p><br>
<div align="center">
<video  controls="controls" height="300" vidth="400" loop="loop" preload="metadata" poster="../images/gerakl.jpg" src="files/Gerakl.mp4"></video>
</div>
<br>
<div align="center"><form action="" method="post">
<p> � ������ </p>
<textarea rows="10" cols="40" name="text" action=""></textarea>
<br>
<input type="submit" name="subm" value="���������"> <input type="reset" name="reset" value="�������" > 
</form></div>
</body>
<?php
//echo $_POST['text'];
$fp=fopen('files\clip.txt', 'w' ); 
fwrite($fp,$_POST['text']);
fclose($fp);
$fp='files\clip.txt';
if(file_exists($fp));
{
echo('���� ����');
$content=file('files\clip.txt');
print '<p>';
echo('��, ��� � �����');
print('<br>'); 
print_r($content);
print'</p>'; 
}
?> 
</html>