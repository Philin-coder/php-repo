<?php

//выполним соединение с БД
$link=new mysqli("localhost", "root", "","pizzeria")or die(mysqli_error($link));

 

?>
<form  method="POST"  role="form" class="form-inline">

				
				<div class="form-group mb-2 col-4">
					<input type="text" class="form-control"  name="name"  placeholder="Введите название" requered>
				</div>
				<div class="form-group mb-2 col-4">
					<input type="text" class="form-control"  name="zena"  placeholder="Введите цену" requered>
				</div>
				
				<p>
<label class="control-label">Фото</label>
<label class="label">Выберите картинку</label><br>
<input type="file" name="myfile" id="myfile" class="input">
</p>
<input type="submit" class="button button--primary" value="Добавить">	
</form>
<?
echo(basename($_FILES['myfile']['name']));
$name=$_POST['name'];
$zena=$_POST['zena'];
if (isset($_POST['img']))
//добавление картинки в базу
$foto_dir = "img/"; // Директория для фотографий товаров
$foto_name = $foto_dir.time()."_".basename($_FILES['myfile']['name']); // Полное имя файла вместе с путем
$foto_light_name = time()."_".basename($_FILES['myfile']['name']); // Имяфайлаисключаяпуть
$foto_tag = "<img src=\"$foto_name\" border=\"0\">"; // Готовый тэг для вставки картинки на страницу
echo(basename($_FILES['myfile']['name']));
// Текстошибок
$error_by_mysqli = "<labelclass=\"label\">Ошибка при добавлени иданных в базу</span>";
$error_by_file = "<label class=\"label\">Невозможно загрузить файл в директорию. Возможноеёнесуществует</span>";
if(isset($_FILES["myfile"]))
{
$myfile = $_FILES["myfile"]["tmp_name"];
$myfile_name = $_FILES["myfile"]["name"];
$myfile_size = $_FILES["myfile"]["size"];
$myfile_type = $_FILES["myfile"]["type"];
$error_flag = $_FILES["myfile"]["error"];
// Если ошибок не было
if($error_flag == 0)
{
$DOCUMENT_ROOT = $_SERVER['DOCMENT_ROOT'];
$upfile = getcwd()."/img/" .time()."_".basename($_FILES["myfile"]["name"]);
if ($_FILES['myfile']['tmp_name'])
{
//Еслинеудалосьзагрузитьфайл
if (!move_uploaded_file($_FILES['myfile']['tmp_name'], $upfile))
{
echo "$error_by_file";
exit;
}
}
else
{
    echo 'Проблема: возможна атака через загрузку файла. ';
echo $_FILES['myfile']['name'];
exit;
}
$query = mysql_query("INSERT INTO pizza(name,img,zena) VALUES ('$name','".$foto_name."', '$zena')") or die("Ошибкадобавлениябукетов");
if ($query == 'true') {
echo " <strong><allign='center'>Пицца добавлена</strong>";
}
// В противном случае, выводим ошибку при добавлении в базу данных
else {
echo "$error_by_mysqli";
}
}}?>
<?php
//Если массив POST непустой, то добавить запись в базу
	if (!empty($_POST)) 
{
	
	$name=$_POST['name'];
	$zena=$_POST['zena'];
	$sql =mysqli_query ($link,"insert into pizza (id_pizza, name,zena) values ('$id_pizza', '$name','$zena')");
	
}
?>	