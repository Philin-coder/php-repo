<?php 
/*
 
if (!empty($_POST)) 
{ 
$id_r=$_POST['naim_r'];
$dolgn=$_POST['dolgn'];
$k_mest=$_POST['k_mest'];
$oklad=$_POST['oklad'];
$tip_zan=$_POST['tip_zan']; 
$data_razm=$_POST['data_razm'];
$id_p=$_POST['naim_p'];
// добавление записи
$sql =$conn->query ("insert into vakansiya(id_r, dolgn, k_mest, oklad, tip_zan, data_razm, id_p) values ('$id_r', '$dolgn', '$k_mest', '$oklad', '$tip_zan', '$data_razm', '$id_p')");			
	$sms = "Вакансия введена !"; 
	 header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/vak.php");
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
        <a href="<?php echo base_url(); ?>main_cont/index">Главная</a>
      </li>
      <li class="breadcrumb-item active">Вакансия</li>
    </ol>
    <!-- Intro Content -->
    <div class="row">     
      <div class="col-lg-12">
	  <h2>Ввод вакансии</h2>
	  <br>
       <form method="POST" action="">
       <?php 
       /*echo '<div>' .$sms.'</div>' 
       */?>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Работодатель</label>
    <div class="col-sm-10">
	<select name="naim_r" >
<?/*
$sql =$conn->query("select * from rabotodatel"); 
	while ($row = mysqli_fetch_array($sql))
 {
   echo '<option value="'.$row['id_r'].'">'.$row['naim_r'].'</option>';
}
*/?>
</div></div>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Должность </label>
    <div class="col-sm-10">
      <input type="text"  name= "dolgn" class="form-control" id="inputEmail3" placeholder="Должность">
    </div></div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Количество мест </label>
    <div class="col-sm-10">
      <input type="text"  name= "k_mest" class="form-control" id="inputEmail3" placeholder="Количество мест">
    </div></div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Оклад </label>
    <div class="col-sm-10">
      <input type="text"  name= "oklad" class="form-control" id="inputEmail3" placeholder="Оклад">
    </div></div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Тип занятости</label>
    <div class="col-sm-10">
    <select class="form-control" name="tip_zan">
								      <option>Полная</option>
								      <option>Частичная</option>
                                      <option>Вахта</option>
                                      <option>Удаленная</option>
                                      <option>Стажировка</option>
								    </select>
    </div></div>
	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Дата размещения</label>
    <div class="col-sm-10">
      <input type="date"  name= "data_razm" class="form-control" id="inputEmail3" placeholder="Дата размещения">
    </div></div>
 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Профессия</label>
    <div class="col-sm-10">
	<select name="naim_p" >
<?/*
$sql =$conn->query("select * from prof"); 
	while ($row = mysqli_fetch_array($sql))
 {
   echo '<option value="'.$row['id_p'].'">'.$row['naim_p'].'</option>';
}
*/?>
</select>
</div></div>
<div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Ввести</button>
    </div>
  </div>
</form>
</div>
</div>
<div class="row">
	<caption> <h2> Вакансия</h2></caption> 
    <table class="table">
			<th>Работодатель</th>
            <th>Должность</th>
            <th>Количество мест</th>
            <th>Оклад</th>
            <th>Тип занятости</th>
            <th>Дата размещения</th>
            <th>Профессия</th>
			  </tr>
	<?php 		
  /*
		$sql = 'select naim_r, dolgn, k_mest, oklad, tip_zan, data_razm, naim_p from vakansiya, rabotodatel, prof where rabotodatel.id_r=vakansiya.id_r and prof.id_p=vakansiya.id_p';		
		$result=$conn->query($sql);		
        while (($row = $result->fetch_array())){			
    echo '<tr>
    <td>'.$row['naim_r'].'</td>
    <td>'.$row['dolgn'].'</td>
    <td>'.$row['k_mest'].'</td>
    <td>'.$row['oklad'].'</td>
    <td>'.$row['tip_zan'].'</td>
    <td>'.$row['data_razm'].'</td>
    <td>'.$row['naim_p'].'</td>
    </tr>';
    }   
mysqli_free_result($result);
mysqli_close($conn);
*/
?>
	</table>
</div>
</div>

<br><br>
  <!-- Footer -->
  
  