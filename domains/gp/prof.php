<?php 
session_start();
$sms=" "; 
$conn = new mysqli('localhost','root','','rekadr');
if ($conn->connect_error){ echo ("Ошибка соединения с сервером MySQLI: ").$conn->connect_error."<br>";
     die("Соединение установлено не было.");}
 //установим кодировку
$conn->set_charset("utf8");
//Если массив POST непустой, то добавить запись в базу	
if (!empty($_POST)) 
{ 
$naim_o=$_POST['naim_o']; 
$naim_p=$_POST['naim_p'];
// добавление записи
$sql ="insert into prof(id_o, naim_p) values ('$naim_o', '$naim_p')";
$result=$conn->query($sql);
var_dump ($result);
  $sms = "Профессия введена !"; 
  header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/prof.php");
} 
include 'temp/head.php';
include 'temp/header_a.php';
 ?>
  <div class="slider">
  <div class="container">
  <div class="center wow fadeInDown">
        <h2>Ввод профессии</h2>
     </div>
       <form method="POST" action="">
	   <?php echo '<div>' .$sms.'</div>' ?>
	       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Отрасль</label>
    <div class="col-sm-10">
	<select name="naim_o" >
<?
$sql =$conn->query("select * from otrasl"); 
	while ($row = mysqli_fetch_array($sql))
 {
   echo '<option value="'.$row['id_o'].'">'.$row['naim_o'].'</option>';
}
?>
</select>
	    </div>
  </div>
	     <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Наименование профессии</label>
    <div class="col-sm-10">
      <input type="text"  name= "naim_p" class="form-control" id="inputEmail3" placeholder="Наименование профессии">
    </div>
  </div> 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Ввести</button>
    </div>
  </div>
</form>
<hr>   
    <div class="row">
	<caption> <h2> Профессии</h2></caption> 
			<table class="table">
			<th>Наименование отрасли</th>	
			<th>Наименование профессии</th>
			  </tr>
	<?php 	
		$sql = 'select  naim_o, naim_p from otrasl, prof where otrasl.id_o=prof.id_o';		
		$result=$conn->query($sql);		
			while (($row = $result->fetch_array())){			
	echo '<tr><td>'.$row['naim_o'].'</td><td>'.$row['naim_p'].'</td></tr>';
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