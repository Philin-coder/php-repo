<?php 
/*
if (!empty($_POST)) 
{  
$rezultat=$_POST['rezultat'];
$prim=$_POST['prim'];
$n=$_POST['n_nn'];

// добавление записи
$sql =$conn->query ("UPDATE napravlenie SET rezultat='$rezultat', prim='$prim' where id_n='$n'" );
			
	$sms = "Результат направления введен !"; 
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
      <li class="breadcrumb-item active">Направление</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
     
      <div class="col-lg-12">
	  <h2>Ввод результата направления</h2>
	  <br>
      <form method="POST" action="">
	   <?php 
     /*echo '<div>' .$sms.'</div>' */
     ?>
	     <div class="form-group row">   
    <label for="inputEmail3" class="col-sm-2 col-form-label">Номер направления</label>
    <div class="col-sm-10">
	<select name="n_nn" >
<?
/*
$sql =$conn->query("select id_n,n_n from napravlenie"); 

	while ($row = mysqli_fetch_array($sql))
 {
   echo '<option value="'.$row['id_n'].'">'.$row['n_n'].'</option>';
}
*/
?>
</select>
	    </div></div>
	   <div class="form-group row">    
    <label for="inputEmail3" class="col-sm-2 col-form-label">Результат </label>
    <div class="col-sm-10">
    <select class="form-control" name="rezultat">
								      <option>Принят</option>
								      <option>Не принят</option>
	  </select>
                                    </div></div>
		<div class="form-group row">  							
    <label for="inputEmail3" class="col-sm-2 col-form-label">Примечание</label>
    <div class="col-sm-10">
      <input type="text"  name= "prim" class="form-control" id="inputEmail3" placeholder="Примечание">
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
	<caption> <h2> Результат направления</h2></caption> 
			<table class="table">				
			<th>Номер направления</th>
            <th>Вакансия</th>
            <th>Соискатель</th>
            <th>Дата направления</th>
            <th>Дата посещения</th>
            <th>Результат</th>
            <th>Примечание</th>
			  </tr>
	<?php 	
  /*
    $sql = 'select n_n, dolgn, fio_s, data_n, data_p, rezultat, prim from napravlenie, vakansiya, soiskatel 
    where vakansiya.id_v=napravlenie.id_v and soiskatel.id_s=napravlenie.id_s';		
		$result=$conn->query($sql);		
			while (($row = $result->fetch_array())){			
    echo '<tr>
    <td>'.$row['n_n'].'</td>
    <td>'.$row['dolgn'].'</td>
    <td>'.$row['fio_s'].'</td>
    <td>'.$row['data_n'].'</td>
    <td>'.$row['data_p'].'</td>
    <td>'.$row['rezultat'].'</td>
     <td>'.$row['prim'].'</td>
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
