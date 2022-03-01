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
        <h2>Список трудоустроенных за период</h2>
      </div>
    <div class="row">
      <div class="col-lg-12">
      <form method="POST" action="">
	   <?php echo '<div>' .$sms.'</div>' ?>
    <div class="form-group row">  	
     <label for="inputEmail3" class="col-sm-2 col-form-label">Дата с:</label>
    <div class="col-sm-10">
      <input type="date"  name= "d1" class="form-control" id="inputEmail3" placeholder=" ">
    </div>
    </div>
        <div class="form-group row">  	
     <label for="inputEmail3" class="col-sm-2 col-form-label">Дата по:</label>
    <div class="col-sm-10">
      <input type="date"  name= "d2" class="form-control" id="inputEmail3" placeholder=" ">
    </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Показать</button>
    </div>
  </div>
  </form>
    <div class="row"> 
    <caption> <h2> Список трудоустроенных</h2></caption>
			<table class="table">
      <tr>
 			 <th>ФИО соискателя</th>	
       <th>Телефон</th>	
			 <th>Профессия</th>
       <th>Предприятие</th>
			</tr>
  <?php
  $conn = new mysqli('localhost','root','','rekadr');
  if ($conn->connect_error){ echo ("Ошибка соединения с сервером MySQLI: ").$conn->connect_error."<br>";
       die("Соединение установлено не было.");}
   //установим кодировку
  $conn  ->set_charset("utf8"); 
  $d1=$_POST['d1'];
  $d2=$_POST['d2'];
    $sql = "select fio_s, tel_s, spec, naim_r from soiskatel, rabotodatel, napravlenie, vakansiya where soiskatel.id_s=napravlenie.id_s and
    vakansiya.id_v=napravlenie.id_v and rabotodatel.id_r=vakansiya.id_r and  data_p between '$d1' and '$d2' and rezultat='Принят' ";		
		$result=$conn->query($sql);				
			while (($row = $result->fetch_array())){			
    echo '<tr>
    <td>'.$row['fio_s'].'</td>
    <td>'.$row['tel_s'].'</td>
    <td>'.$row['spec'].'</td>
    <td>'.$row['naim_r'].'</td>
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
  include 'temp/footer.php'; 
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