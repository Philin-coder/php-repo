<?php
 $name_db = 'mebel';
    $username = 'root';
    $password_db = '';
    $host = 'localhost';

    $login = $_POST['login'];
    $parol = $_POST['parol'];

    $error = "";

    $db = mysqli_connect($host, $username, $password_db, $name_db);

    $check = "SELECT * FROM polzov WHERE login = '".$login."' AND parol = '".$parol."'";


    if (!empty($_POST)) {

        $result = mysqli_query($check);
        $row = mysqli_fetch_array($result); else {
    
            $error = '<div class="color-error">Такого пользователя не существует!</div>';
    
        } 

    }
?>

