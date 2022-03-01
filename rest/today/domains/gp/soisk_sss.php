<?php 
session_start();
$conn = new mysqli('localhost','root','','rekadr');
if ($conn->connect_error){ echo ("Ошибка соединения с сервером MySQLI: ").$conn->connect_error."<br>";
     die("Соединение установлено не было.");}
 //установим кодировку
$conn  ->set_charset("utf8");
if (!empty($_POST)) 
{ 
$search=$_POST['search'];	
$search = trim($search);
$search = strip_tags($search);
$sql ="select fio_s from soiskatel where fio_s  LIKE '%$search%' "; 
/* header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/search.php"); */
} 
include 'temp/head.php';
include 'temp/header_s.php';
 ?>
  <br>
  <div class="slider">
    <div class="container">
     <div class="center wow fadeInDown">
        <h2>Поиск соискателя</h2>
     </div>
     <div class="row">
      <div class="col-lg-12">	  
	  <form  method="POST" action="">
<div class="form-group row">
<div class="col-sm-10">
<input type="search" name="search" class="form-control" id="inputEmail3" placeholder="Введите ФИО"> 
</div>
<div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Найти</button>
    </div></div>
    <hr>
</form>
  <div class="row">
	<caption> <h2> Соискатель</h2></caption> 
			<table class="table">
			<th>Дата регистрации</th>
			<th>ФИО соискателя</th>
			<th>Дата рождения</th>
			<th>Пол</th>
			<th>Гражданство</th>
			<th>Адрес</th>
			<th>Телефон</th>
			<th>Образование</th>
			<th>Стаж</th>
			<th>Специальность</th>
			<th>Семейное положение</th>
			  </tr>
	<?php 	
 	$sql ="select  data_reg, fio_s, data_rog, pol, gragd, adres_s, tel_s, obraz, stag, spec, sp from soiskatel where fio_s='$search'";
		$result=$conn->query($sql);		
			while (($row = $result->fetch_array()))
			{			
    echo '<tr>
    <td>'.$row['data_reg'].'</td>
   <td>'.$row['fio_s'].'</td>
   <td>'.$row['data_rog'].'</td>
   <td>'.$row['pol'].'</td>
   <td>'.$row['gragd'].'</td>
   <td>'.$row['adres_s'].'</td>
   <td>'.$row['tel_s'].'</td>
   <td>'.$row['obraz'].'</td>
   <td>'.$row['stag'].'</td>
   <td>'.$row['spec'].'</td>
   <td>'.$row['sp'].'</td>
    </tr>';
	}	
?>
	</table>
    <div>
    <form method="POST" action="n.php">
	    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Номер направления </label>
       <div class="col-sm-10">
        <input type="text"  name= "n_n" class="form-control" id="inputEmail3" placeholder="Номер направления">
       </div>
      </div>
      <div class="form-group row">
    
       <div class="col-sm-10">
        <input type="hidden"  name= "id_s" class="form-control" id="inputEmail3" placeholder="Номер направления">
       </div>
      </div>
      <div class="form-group row">
       <label for="inputEmail3" class="col-sm-2 col-form-label">Вакансия</label>
        <div class="col-sm-10">
	      <select name="id_v" class="form-control" id="inputEmail3" >
        <?
         $sql =$conn->query("select * from vakansiya"); 
	       while ($row = mysqli_fetch_array($sql))
         {
         echo '<option value="'.$row['id_v'].'">'.$row['dolgn'].'</option>';
         }
        ?>
        </select>
	      </div>
      </div>
      <div class="form-group row">
       <label for="inputEmail3" class="col-sm-2 col-form-label">Дата выдачи направления </label>
        <div class="col-sm-10">
         <input type="date"  name= "data_n" class="form-control" id="inputEmail3" placeholder="Дата направления">
        </div>
      </div>
      <div class="form-group row">
       <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Ввести</button>
       </div>
      </div>
    </form>	</div>
     </div> 
</div> 
</div> 
</div> 
</div>
      <!-- Footer -->
      <?php 
  include 'temp/footer_s.php'; 
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