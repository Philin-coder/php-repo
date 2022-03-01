<?php 
session_start();
$sms=" "; 
$conn = new mysqli('localhost','root','','rekadr');
if ($conn->connect_error){ echo ("Ошибка соединения с сервером MySQLI: ").$conn->connect_error."<br>";
     die("Соединение установлено не было.");}
//установим кодировку
$conn  ->set_charset("utf8");

if (!empty($_POST)) 
{ 

$n_n=$_POST['n_n'];
$id_v=$_POST['id_v'];
$search=$_POST['search'];	
$data_n=$_POST['data_n'];
$data_p=$_POST['data_p']; 

// добавление записи
$sql =$conn->query ("insert into napravlenie(n_n, id_v, id_s, data_n, data_p) values 
('$n_n', '$id_v', '$search', '$data_n', '$data_p')");			
  $sms = "Направление введено !"; 
  header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/napr.php");
} 
?>
	
  