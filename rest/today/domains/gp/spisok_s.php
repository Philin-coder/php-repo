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
        <h2>Список клиентов (по профессии)</h2>
      </div>
    <div class="row">
      <div class="col-lg-12">     
<form method="post" action="">
<div class="form-group row">
<div class="col-sm-10">
<input type="text" name="prof" class="form-control" id="inputEmail3" placeholder="Введите профессию"> 
</div></div>

<input type="submit" value="Найти">
</form>
<div class="row"> 
    <caption> <h2> Список соискателей</h2></caption>
			<table class="table">
      <tr>
 			      <th>ФИО соискателя</th>	
            <th>Телефон</th>	
			      <th>Профессия</th>
            <th>Стаж</th>
            <th>Образование</th>
            <th>Пол</th>
            <th>Семейное положение</th>
			  </tr>
       
<?php 
 $conn = new mysqli('localhost','root','','rekadr');
 if ($conn->connect_error){ echo ("Ошибка соединения с сервером MySQLI: ").$conn->connect_error."<br>";
      die("Соединение установлено не было.");}
  //установим кодировку
 $conn  ->set_charset("utf8");
   $prof=$_POST['prof']; 
  //-Запрос к таблице базы данных  
  $sql="SELECT fio_s, tel_s, spec, stag, obraz, pol, sp FROM soiskatel WHERE  spec LIKE '%".$prof."%'"; 
  $result=$conn->query($sql);				
  while (($row = $result->fetch_array())){			
echo '<tr>
<td>'.$row['fio_s'].'</td>
<td>'.$row['tel_s'].'</td>
<td>'.$row['spec'].'</td>
<td>'.$row['stag'].'</td>
<td>'.$row['obraz'].'</td>
<td>'.$row['pol'].'</td>
<td>'.$row['sp'].'</td>
</tr>';
}  
mysqli_free_result($result);
mysqli_close($conn);  
?> </table>
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