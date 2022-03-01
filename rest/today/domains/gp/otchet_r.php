<?php 
include 'temp/head.php';
include 'temp/header_d.php'; 
 ?>
  <br>
 <br>
 <br>
 <br>
   <div class="slider">
    <div class="container">
 <div class="center wow fadeInDown">
        <h2>Список работодателей</h2>
      </div>
    <form method="POST" action="">
	   <?php echo '<div>' .$sms.'</div>' ?>
    <div class="form-group row">  	
     <label for="inputEmail3" class="col-sm-2 col-form-label">Дата регистрации</label>
    <div class="col-sm-10">
      <input type="date"  name= "d_r" class="form-control" id="inputEmail3" placeholder="Дата регистрации">
    </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Ввести</button>
    </div>
  </div>
  </form>
    <div class="row"> 
    <caption> <h2> Список работодателей</h2></caption>
			<table class="table">
 			<th>№</th>	
       <th>Дата регистрации</th>	
			<th>Наименование</th>
            <th>Телефон</th>
            <th>Контактное лицо должность</th>
            <th>Контактное лицо ФИО</th>
            <th>Адрес</th>
			  </tr>
  <?php
  $conn = new mysqli('localhost','root','','rekadr');
  if ($conn->connect_error){ echo ("Ошибка соединения с сервером MySQLI: ").$conn->connect_error."<br>";
       die("Соединение установлено не было.");}
   //установим кодировку
  $conn  ->set_charset("utf8"); 
  $d_r=$_POST['d_r'];	
		$sql = "select id_r, d_r, naim_r, tel_r, kl_d, kl_fio, adres_r from rabotodatel where d_r<='$d_r'";		
		$result=$conn->query($sql);				
			while (($row = $result->fetch_array())){			
    echo '<tr>
    <td>'.$row['id_r'].'</td>
    <td>'.$row['d_r'].'</td>
    <td>'.$row['naim_r'].'</td>
    <td>'.$row['tel_r'].'</td>
    <td>'.$row['kl_d'].'</td>
    <td>'.$row['kl_fio'].'</td>
    <td>'.$row['adres_r'].'</td>
    </tr>';
    }    
mysqli_free_result($result);
mysqli_close($conn);
?>
	</table>	
     </div>       
      </div>
    </div>
    </div>
  </div>
      <!-- Footer -->
  <?php 
  include 'temp/footer_d.php'; 
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