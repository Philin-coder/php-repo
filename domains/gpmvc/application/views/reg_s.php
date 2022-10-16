<?php 
session_start();
$id_user = $_SESSION ['id_user']; 
$status=$_POST['status'];
$msg = '';
//Если массив POST непустой, то добавить запись в базу 
if (!empty($_POST)) 
{ 
$conn = mysqli_connect('localhost','root','','rekadr');
if (mysqli_connect_errno($conn)) {
echo "Не удалось подключиться к БД:".mysql_connect_error();
}
$fio=$_POST['fio']; 
$login=$_POST['login']; 
$password=$_POST['password']; 
$status=$_POST['status'];
// добавление записи
		$sql = ("insert into users (login, password, fio_user, status) values ('$login', '$password', '$fio','$status')"); 
		var_dump($sql);
$result=mysqli_query($conn,$sql); 
$msg  = "Пользователь успешно зарегистрирован!"; 
header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/reg_s.php");
} 
include 'temp/head.php';
include 'temp/header_a.php';
 ?>
  <div class="slider">
    <div class="container">
    <div class="center wow fadeInDown">
        <h2>Регистрация сотрудника</h2>
     </div>
    <form method="POST" action="">
	   <?php echo '<div>' .$msg.'</div>' ?>
	     <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ФИО</label>
    <div class="col-sm-10">
      <input type="text"  name= "fio" class="form-control" id="inputEmail3" placeholder="ФИО">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Логин</label>
    <div class="col-sm-10">
      <input type="text" name= "login" class="form-control" id="inputPassword3" placeholder="Логин">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
    <div class="col-sm-10">
      <input type="password" name= "password"  class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
    <div class="form-group row">
	 <label for="inputPassword3" class="col-sm-2 col-form-label">Статус</label>
	 <div class="col-sm-10">
  <select name ="status" id="inputState" class="form-control">
    <option selected>Выбрать...</option>
    <option>Специалист</option>
	<option>Директор</option>
	 </select>
		</div>                                 
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Зарегистрировать</button>
    </div>
  </div>
</form>
<div class="row">
	<caption> <h2> Список пользователей</h2></caption> 
			<table class="table">		
			<th>Логин</th>
			<th>Пароль</th>
			<th>ФИО сотрудника</th>
        <th>Статус</th>
                </tr>
	<?php 
	$conn = mysqli_connect('localhost','root','','rekadr');
		$sql = 'select login, password, fio_user, status from users ';			
		$result= mysqli_query($conn, $sql) or die(mysqli_error($conn));		
			while ($row = mysqli_fetch_array($result)){			
	echo '<tr><td>'.$row['login'].'</td><td>'.$row['password'].'</td><td>'.$row['fio_user'].'</td><td>'.$row['status'].'</td></tr>';
    }    
mysqli_free_result($result);
mysqli_close($conn);
?>
	</table>
</div>
    </div>
  </div>
      <!-- Footer -->
  <?php 
  include 'temp/footer_a.php'; 
?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>