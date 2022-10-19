<?php 

//$search=$_POST['search'];	
// if(isset($search)){
  //$search=$_POST['search'];	
// $search = trim($search);
// $search = strip_tags($search);
//}
//$sql ="select fio_s from soiskatel where fio_s  LIKE '%$search%' "; 
/* header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/search.php"); */
//} 
//include 'temp/head.php';
//include 'temp/header_s.php';
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
  if (isset($find)){
 			foreach($find as $row):{			
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
  endforeach;
}
?>
	</table>	
     </div> 
</div> 
</div> 
</div> 
</div>
      <!-- Footer -->
  