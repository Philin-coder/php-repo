<?php 
//session_start();
//ob_start();

// include 'temp/head.php';
// include 'temp/header.php';

//$msg = '';
// $conn = new mysqli('localhost','root','','rekadr');
// if ($conn->connect_error){ echo ("Ошибка соединения с сервером MySQL: ").$conn->connect_error."<br>";
//      die("Соединение установлено не было.");}

//  //установим кодировку
// $conn  ->set_charset("utf8");

// if (!empty($_POST['password']) and !empty($_POST['login'])) {
//     $sql = "SELECT * FROM users WHERE login = '".$_POST['login']."' AND password = '".$_POST['password']."'";
//     $query = $conn->query($sql);
//     	$user = mysqli_fetch_assoc( $query);
//     if (!empty($query )) {
//             $data_user = array(
//                 'id_user' =>$user['id_user'],
//                 'fio_user' =>  $user['fio_user'],
//                 'login' =>  $user['login'],
// 				'status' =>  $user['status']
//             );			
//             $_SESSION['data_user'] = $data_user;
// 			if ($_SESSION['data_user']['status'] == 'Администратор') {
//             header('Location: admin.php');
// }}
//  if ($_SESSION['data_user']['status'] == 'Специалист') {
// header("Location: spec.php");
//     }
// 	if ($_SESSION['data_user']['status'] == 'Директор') {
// 		header("Location: dir.php");
// }
// else 
// { 
// $msg  = "Неверный логин или пароль"; 
// } 

// }	?>
  <div class="slider">
 <div class="container">

<div class="row">
  <div class="col-lg-12 ">
  <div class="center wow fadeInDown">
        <h2>ФОРМА АВТОРИЗАЦИИ</h2>
      </div>
      </div>
  </div>
  <div class="row">
  <div class="col-sm-10">
  <form action='<?php echo base_url()?>avt_cont/autor' method= 'POST' name="sentMessage" id="contactForm" novalidate>
      <?php //echo '<div>' .$msg.'</div>' ?>
      <div class="control-group form-group">
        <div class="controls">
          <label>Логин:</label>
          <input type="text" name= "login" class="form-control" id="log" required data-validation-required-message="Please enter your name." required>
          <p class="help-block"></p>
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>Пароль:</label>
          <input type="password" name="password" class="form-control" id="pass" required data-validation-required-message="Please enter your phone number." required>
        </div>
      </div>
    
      
      <div id="success"></div>
      <!-- For success/fail messages -->
      <button type="submit" class="btn btn-primary" id="sendMessageButton">Войти</button>
    </form>
  </div>
  </div>
</div>
<!-- /.row -->
</div>
</div> 
<!-- /.container -->
</body>
<!-- Footer -->
<br> <br> <br> <br> <br> <br> <br> <br> <br> 

