<? include ('include/header_admin.php');
// Подлючаем файл с пользовательскими функциями
require_once('functions.php');
connect();?>
<div class="col-md-2">
</div>
	
<?$nazvanie=$_POST['nazvanie'];
$zena=$_POST['zena'];

if (isset($_POST['img']))
//добавление картинки в базу
$foto_dir = "images/"; // Директория для фотографий товаров
$foto_name = $foto_dir.time()."_".basename($_FILES['myfile']['name']); // Полное имя файла вместе с путем
$foto_light_name = time()."_".basename($_FILES['myfile']['name']); // Имяфайлаисключаяпуть
$foto_tag = "<img src=\"$foto_name\" border=\"0\">"; // Готовый тэг для вставки картинки на страницу
// Текстошибок
$error_by_mysql = "<labelclass=\"label\">Ошибкапридобавленииданныхвбазу</span>";
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
$upfile = getcwd()."/images/" .time()."_".basename($_FILES["myfile"]["name"]);
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
$query = mysql_query("INSERT INTO pizza(nazvanie,img,zena) VALUES ('$nazvanie','".$foto_name."', '$zena')") or die("Ошибкадобавлениябукетов");
if ($query == 'true') {
echo " <strong><allign='center'>Пицца добавлена</strong>";
}
// В противном случае, выводим ошибку при добавлении в базу данных
else {
echo "$error_by_mysql";
}
}}?><br></br><br></br><br><br>
<?include ('include/footer.php')?>




























if (isset($_POST['img']))
//добавление картинки в базу
$foto_dir = "img/"; // Директория для фотографий товаров
$foto_name = $foto_dir.time()."_".basename($_FILES['myfile']['name']); // Полное имя файла вместе с путем
$foto_light_name = time()."_".basename($_FILES['myfile']['name']); // Имяфайлаисключаяпуть
$foto_tag = "<img src=\"$foto_name\" border=\"0\">"; // Готовый тэг для вставки картинки на страницу
// Текстошибок
$error_by_mysql = "<labelclass=\"label\">Ошибкапридобавленииданныхвбазу</span>";
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
echo "$error_by_mysql";
}
}}
