<?php 


/*
		
	$sms = "Направление введено !"; 
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
      <li class="breadcrumb-item active">Направление</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
     
      <div class="col-lg-12">
	  <h2>Ввод направления</h2>
	  <br>
      <form method="POST" action="">
	   <?php 
     /*
     echo '<div>' .$sms.'</div>'
     */ 
     ?>
	     <div class="form-group row">
         <label for="inputEmail3" class="col-sm-2 col-form-label">Номер направления </label>
    <div class="col-sm-10">
      <input type="text"  name= "n_n" class="form-control" id="inputEmail3" placeholder="Номер направления">
    </div>
    </div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Вакансия</label>
    <div class="col-sm-10">
	<select name="id_v" >
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
        <label for="inputEmail3" class="col-sm-2 col-form-label">Соискатель</label>
    <div class="col-sm-10">
	<select name="id_s" >
<?
/*
$sql =$conn->query("select * from soiskatel"); 

	while ($row = mysqli_fetch_array($sql))
 {
   echo '<option value="'.$row['id_s'].'">'.$row['fio_s'].'</option>';
}
*/
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
    <label for="inputEmail3" class="col-sm-2 col-form-label">Дата посещения организации </label>
    <div class="col-sm-10">
      <input type="date"  name= "data_p" class="form-control" id="inputEmail3" placeholder="Дата посещения">
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
	<caption> <h2> Направление</h2></caption> 
			<table class="table">
				
			<th>Номер направления</th>
            <th>Вакансия</th>
            <th>Соискатель</th>
            <th>Дата направления</th>
            <th>Дата посещения</th>
			  </tr>
	<?php 	
  /*
    $sql = 'select n_n, dolgn, fio_s, data_n, data_p from napravlenie, vakansiya, soiskatel 
    where vakansiya.id_v=napravlenie.id_v and soiskatel.id_s=napravlenie.id_s';		
		$result=$conn->query($sql);		
			while (($row = $result->fetch_array())){			
    echo '<tr>
    <td>'.$row['n_n'].'</td>
    <td>'.$row['dolgn'].'</td>
    <td>'.$row['fio_s'].'</td>
    <td>'.$row['data_n'].'</td>
    <td>'.$row['data_p'].'</td>
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


