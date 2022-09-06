<?php 
/*


//Если массив POST непустой, то добавить запись в базу	
if (!empty($_POST)) 
{ 
$naim_o=$_POST['naim_o']; 
$naim_p=$_POST['naim_p'];

// добавление записи
$sql ="insert into prof(id_o, naim_p) values ('$naim_o', '$naim_p')";

$result=$conn->query($sql);
var_dump ($result);
	$sms = "Профессия введена !"; 
} 
*/
 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Ввод профессий
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url();?>main_cont/index">Главная</a>
      </li>
      <li class="breadcrumb-item active">Профессии</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
     
      <div class="col-lg-12">
	  <h2>Ввод профессий</h2>
	  <br>
       <form method="POST" action="">
	   <?/*php echo '<div>' .$sms.'</div>' */?>
	       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Отрасль промышленности</label>
    <div class="col-sm-10">
	<select name="naim_o" >
<?
/*
$sql =$conn->query("select * from otrasl"); 

	while ($row = mysqli_fetch_array($sql))
 {
   echo '<option value="'.$row['id_o'].'">'.$row['naim_o'].'</option>';
}
*/
?>
</select>
	    </div>
  </div>
	     <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Наименование профессии</label>
    <div class="col-sm-10">
      <input type="text"  name= "naim_p" class="form-control" id="inputEmail3" placeholder="Наименование профессии">
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
	<caption> <h2> Профессии</h2></caption> 
			<table class="table">
			<th>Наименование отрасли</th>	
			<th>Наименование профессии</th>
			  </tr>
	<?php 
	/*
		$sql = 'select  naim_o, naim_p from otrasl, prof where otrasl.id_o=prof.id_o';
		
		$result=$conn->query($sql);
		
			while (($row = $result->fetch_array())){			
	echo '<tr><td>'.$row['naim_o'].'</td><td>'.$row['naim_p'].'</td></tr>';
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



