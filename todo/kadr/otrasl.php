<?php 
session_start();
 include 'temp/head.php';
include 'temp/nav_a.php';
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
} 
 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Ввод отрасли промышленности
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Главная</a>
      </li>
      <li class="breadcrumb-item active">Отрасль</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
     
      <div class="col-lg-12">
	  <h2>Ввод отрасли промышленности</h2>
	  <br>
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
        
      </div>
    </div>
	 
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
  <!-- /.container -->
</body>
<br><br>
  <!-- Footer -->
  <?php 
  include 'temp/footer.php'; 
?>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>



</html>
