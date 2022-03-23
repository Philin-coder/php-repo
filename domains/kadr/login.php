<?php 
session_start();
ob_start();

include 'temp/head.php';
include 'temp/nav.php';

$msg = '';
$conn = new mysqli('localhost','root','','rekadr');
if ($conn->connect_error){ echo ("Ошибка соединения с сервером MySQL: ").$conn->connect_error."<br>";
     die("Соединение установлено не было.");}

 //установим кодировку
$conn  ->set_charset("utf8");

if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $sql = "SELECT * FROM users WHERE login = '".$_POST['login']."' AND password = '".$_POST['password']."'";
    $query = $conn->query($sql);
    	$user = mysqli_fetch_assoc( $query);
    if (!empty($query )) {
            $data_user = array(
                'id_user' =>$user['id_user'],
                'fio_user' =>  $user['fio_user'],
                'login' =>  $user['login'],
				'status' =>  $user['status']
            );			
            $_SESSION['data_user'] = $data_user;
			if ($_SESSION['data_user']['status'] == 'Администратор') {
            header('Location: admin.php');
}}
 if ($_SESSION['data_user']['status'] == 'Специалист') {
header("Location: upr.php");
    }
	if ($_SESSION['data_user']['status'] == 'Директор') {
		header("Location: dir.php");
}
else 
{ 
$msg  = "Неверный логин или пароль"; 
} 

}	?>


  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Авторизация
    
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Главная </a>
      </li>
      <li class="breadcrumb-item active">Авторизация</li>
    </ol>

    <!-- Content Row -->
    
    <!-- Contact Form -->
  
    <div class="row">
      <div class="col-lg-12 ">
        <h3>Форма авторизации</h3>
		<br> 
   <br> 
  
        <form method= "POST" name="sentMessage" id="contactForm" novalidate>
		<?php echo '<div>' .$msg.'</div>' ?>
          <div class="control-group form-group">
            <div class="controls">
              <label>Логин:</label>
              <input type="text" name= "login" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Пароль:</label>
              <input type="password" name="password" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
        
          
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Войти</button>
        </form>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</body>
  <!-- Footer -->
  <br> 
   <br> <br> 
   <br> <br> 
   <br> 
  <br> 
   <br> 
  <br> 
   <br> 
  
  <br> 
   <br> <br> 
   <br> 
  
  
  
  <?php 
  include 'temp/footer.php'; 
?>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>




</html>
