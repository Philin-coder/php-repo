<?
$host = 'localhost'; // адрес сервера 
$user = 'root'; // имя пользователя
$password = ''; // пароль
$database = 'pizzeria'; // имя базы данных

 $link = mysqli_connect($host, $user, $password, $database);

if (!empty($_POST)) {
 
    $sql = mysqli_query($link,"SELECT * FROM polzov WHERE login = '".$_POST['login_login']."' AND parol = '".$_POST['parol_login']."'");
   /*  $query = $db->query($sql); */
    $result = mysqli_fetch_array($sql);

    if (!empty($result)) {


            $_SESSION['id_user'] = $result['id_user'];
            $_SESSION['login'] = $result['login'];
            $_SESSION['parol'] = $result['parol'];

            header('Location: admin.php');

    }

}

?>