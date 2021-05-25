<html>
<head>
<meta charset="windows-1251">
<title>
пароль
</title>
</head>
<body bgcolor="red" text="white"> 
<?php
function code($w)
{
$w=date("m");
$w=$w."a";
$w=md5($w);
$w=$_SERVER['REMOTE_ADRESS'].$w;
$w=base64_encode($w);
$w=md5($w);
$w=base64_encode($w);
$w=md5($w);
return $w;
}
echo code($w);
echo('<br>');
echo ('ваш пароль это');
$fp=fopen('files\pas.txt','w' );
fwrite($fp, code($w));
fclose($fp);
$content=file('files\pas.txt');
print('<p>');
print_r($content);
print('</p>');
$fp='files\pas.txt';
if(file_exists($fp))
{
echo ("файл есть".'<br>');
}
$file="files\pas.txt";
$fp=fopen('$file','r');
$fsize=filesize($file);
fclose($fp);

echo ($fsize);
?>
</body>
</html>