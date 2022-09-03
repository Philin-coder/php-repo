<?php 

/*
if (!empty($_POST)) 
{ 
$data_reg=$_POST['data_reg'];
$fio_s=$_POST['fio_s'];
$data_rog=$_POST['data_rog'];
$pol=$_POST['pol'];
$gragd=$_POST['gragd']; 
$adres_s=$_POST['adres_s'];
$tel_s=$_POST['tel_s'];
$obraz=$_POST['obraz'];
$stag=$_POST['stag'];
$spec=$_POST['spec'];
$sp=$_POST['sp'];

// добавление записи
$sql =$conn->query ("insert into soiskatel(data_reg, fio_s, data_rog, pol, gragd, adres_s, tel_s, obraz, stag, spec, sp) values 
('$data_reg', '$fio_s', '$data_rog', '$pol', '$gragd', '$adres_s', '$tel_s', '$obraz', '$stag', '$spec', '$sp')");
			
	$sms = "Соискатель введен !"; 
} 
*/
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
      <li class="breadcrumb-item active">Соискатель</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
     
      <div class="col-lg-12">
	  <h2>Ввод соискателя</h2>
	  <br>
       <form method="POST" action="">
	   <?php
     /* echo '<div>' .$sms.'</div>'*/ 
     ?>
	     <div class="form-group row">
         <label for="inputEmail3" class="col-sm-2 col-form-label">Дата регистрации </label>
    <div class="col-sm-10">
      <input type="date"  name= "data_reg" class="form-control" id="inputEmail3" placeholder="Дата регистрации">
    </div></div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ФИО </label>
    <div class="col-sm-10">
      <input type="text"  name= "fio_s" class="form-control" id="inputEmail3" placeholder="ФИО соискателя">
    </div></div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Дата рождения </label>
    <div class="col-sm-10">
      <input type="date"  name= "data_rog" class="form-control" id="inputEmail3" placeholder="Дата рождения">
    </div></div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Пол </label>
    <div class="col-sm-10">
    <select class="form-control" name="pol">
								      <option>Мужской</option>
								      <option>Женский</option>
		</select>
    </div></div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Гражданство</label>
    <div class="col-sm-10">
    <select class="form-control" name="gragd">
								      <option>Россия</option>
								      <option>Иностранное</option>
	  </select>  
    </div></div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Адрес</label>
    <div class="col-sm-10">
      <input type="text"  name= "adres_s" class="form-control" id="inputEmail3" placeholder="Адрес">
    </div></div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Телефон</label>
    <div class="col-sm-10">
      <input type="text"  name= "tel_s" class="form-control" id="inputEmail3" placeholder="Телефон">
    </div></div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Образование</label>
    <div class="col-sm-10">
    <select class="form-control" name="obraz">
								      <option>Начальное</option>
								      <option>Среднее</option>
                      <option>Высшее</option>
		</select>
    </div></div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Стаж</label>
    <div class="col-sm-10">
      <input type="text"  name= "stag" class="form-control" id="inputEmail3" placeholder="Стаж">
    </div></div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Специальность</label>
    <div class="col-sm-10">
      <input type="text"  name= "spec" class="form-control" id="inputEmail3" placeholder="Специальность">
    </div></div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Семейное положение</label>
    <div class="col-sm-10">
    <select class="form-control" name="sp">
								      <option>Холост</option>
								      <option>Женат</option>
                      <option>Не замужем</option>
                      <option>Замужем</option>
		</select>  
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
	<caption> <h2> Соискатель</h2></caption> 
			<table class="table">
			      <th>Дата регистрации</th>
            <th>ФИО</th>
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
      /*
  $sql = 'select data_reg, fio_s, data_rog, pol, gragd, adres_s, tel_s, obraz, stag, spec, sp FROM soiskatel ';  
  $result=$conn->query($sql);  
  while (($row = $result->fetch_array())){			
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

<!-- Bootstrap core JavaScript -->
