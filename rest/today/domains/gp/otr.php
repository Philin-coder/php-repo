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
$naim_o=$_POST['naim_o']; 
// добавление записи
$sql =$conn->query ("insert into otrasl(naim_o) values ('$naim_o')");			
  $sms = "Отрасль введена !";
  header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/otr.php"); 
} 
include 'temp/head.php';
include 'temp/header_a.php';
 ?>
  <div class="slider">
    <div class="container">
     <div class="center wow fadeInDown">
        <h2>Ввод отрасли</h2>
     </div>
       <form method="POST" action="">
	   <?php echo '<div>' .$sms.'</div>' ?>
	     <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Наименование </label>
    <div class="col-sm-10">
      <input type="text"  name= "naim_o" class="form-control" id="inputEmail3" placeholder="Наименование отрасли">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Ввести</button>
    </div>
  </div>
</form>          
    <div class="row">
	<caption> <h2> Отрасли промышленности</h2></caption> 
			<table class="table">
			<th>№</th>	
			<th>Наименование</th>
			  </tr>
	<?php 
		$sql = 'select id_o, naim_o from otrasl ';		
		$result=$conn->query($sql);		
			while (($row = $result->fetch_array())){			
	echo '<tr><td>'.$row['id_o'].'</td><td>'.$row['naim_o'].'</td></tr>';
    }    
mysqli_free_result($result);
mysqli_close($conn);
?>
	</table>	
     </div> 
  </div> 
  </div> 
  </div>
  <!-- /.container -->
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
