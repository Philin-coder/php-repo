<?php 
/*
if (!empty($_POST)) 
{ 
$naim_r=$_POST['naim_r'];
$tel_r=$_POST['tel_r'];
$kl_d=$_POST['kl_d'];
$kl_fio=$_POST['kl_fio'];
$adres_r=$_POST['adres_r']; 

// добавление записи
$sql =$conn->query ("insert into rabotodatel(naim_r, tel_r, kl_d, kl_fio, adres_r) values 
('$naim_r', '$tel_r', '$kl_d', '$kl_fio', '$adres_r')");
			
	$sms = "Работодатель введен !"; 
  */
//} 
 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Страница специалиста
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
      <a href="<?php echo base_url();?>main_cont/index">Главная</a>
        
      </li>
      <li class="breadcrumb-item active">Работодатель</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
     
      <div class="col-lg-12">
	  <h2>Ввод работодателя</h2>
	  <br>
       <form method="POST" action="">
	   <?php 
     /*echo '<div>' .$sms.'</div>' */
     ?>
	     <div class="form-group row">
         <label for="inputEmail3" class="col-sm-2 col-form-label">Наименование </label>
    <div class="col-sm-10">
      <input type="text"  name= "naim_r" class="form-control" id="inputEmail3" placeholder="Наименование">
    </div>
	</div>
	 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Телефон </label>
    <div class="col-sm-10">
      <input type="text"  name= "tel_r" class="form-control" id="inputEmail3" placeholder="Телефон">
    </div></div>
	 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Контактное лицо должность </label>
    <div class="col-sm-10">
      <input type="text"  name= "kl_d" class="form-control" id="inputEmail3" placeholder="Контактное лицо должность">
    </div></div>
	 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Контактное лицо ФИО </label>
    <div class="col-sm-10">
      <input type="text"  name= "kl_fio" class="form-control" id="inputEmail3" placeholder="Контактное лицо ФИО">
    </div></div>
	 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Адрес</label>
    <div class="col-sm-10">
      <input type="text"  name= "adres_r" class="form-control" id="inputEmail3" placeholder="Адрес">
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
	<caption> <h2> Работодатель</h2></caption> 
			<table class="table">
			<th>№</th>	
			<th>Наименование</th>
            <th>Телефон</th>
            <th>Контактное лицо должность</th>
            <th>Контактное лицо ФИО</th>
            <th>Адрес</th>
			  </tr>
	<?php 
	
	/*
	
	
		$sql = 'select id_r, naim_r, tel_r, kl_d, kl_fio, adres_r from rabotodatel ';
		
		$result=$conn->query($sql);
		
			while (($row = $result->fetch_array())){			
    echo '<tr>
    <td>'.$row['id_r'].'</td>
    <td>'.$row['naim_r'].'</td>
    <td>'.$row['tel_r'].'</td>
    <td>'.$row['kl_d'].'</td>
    <td>'.$row['kl_fio'].'</td>
    <td>'.$row['adres_r'].'</td>
    </tr>';
    }
    
mysqli_free_result($result);
mysqli_close($conn);
*/
?>
	</table>
	
     </div> 
  </div> 
  <!-- /.container -->

<br><br>
  <!-- Footer -->
  