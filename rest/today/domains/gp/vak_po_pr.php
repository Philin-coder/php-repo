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
        <h2>Вакансии по профессии</h2>
      </div>
    <div class="row">
      <div class="col-lg-12">
      <form method="post" action="">
<div class="form-group row">
<div class="col-sm-10">
<input type="text" name="proff" class="form-control" id="inputEmail3" placeholder="Введите профессию"> 
</div>
</div>
<div class="form-group row">
<div class="col-sm-10">
<input type="date" name="d_v" class="form-control" id="inputEmail3" placeholder="Введите дату"> 
</div>
</div>
<input type="submit" value="Найти">
</form>
<div class="row"> 
    <caption> <h2> Список соискателей</h2></caption>
			<table class="table">
      <tr>	
 			      <th>Место работы</th>	
            <th>Телефон</th>	
			      <th>Контактное лицо</th>
            <th>Количество вакантных мест</th>
            <th>Должность</th>
            <th>Оклад</th>
			  </tr>
       
<?php 
 $conn = new mysqli('localhost','root','','rekadr');
 if ($conn->connect_error){ echo ("Ошибка соединения с сервером MySQLI: ").$conn->connect_error."<br>";
      die("Соединение установлено не было.");}
  //установим кодировку
 $conn  ->set_charset("utf8");
   $proff=$_POST['proff']; 
   $d_v=$_POST['d_v'];
  //-Запрос к таблице базы данных  
  $sql="SELECT naim_r, tel_r, kl_fio, k_mest, dolgn, oklad FROM vakansiya, rabotodatel WHERE 
  rabotodatel.id_r=vakansiya.id_r and 
   dolgn LIKE '%".$proff."%' and data_razm<='$d_v'"; 
  $result=$conn->query($sql);				
  while (($row = $result->fetch_array())){			
echo '<tr>
<td>'.$row['naim_r'].'</td>
<td>'.$row['tel_r'].'</td>
<td>'.$row['kl_fio'].'</td>
<td>'.$row['k_mest'].'</td>
<td>'.$row['dolgn'].'</td>
<td>'.$row['oklad'].'</td>
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