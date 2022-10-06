<?php
//Очистить данные сесси
	session_start();
	unset($_SESSION['id_user']);
	unset($_SESSION['fio_user']);
	//Перейти на Главную страницу
	header('Location:index.php');

?>