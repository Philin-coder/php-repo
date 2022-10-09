<?php 
echo $msg;
 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Ввод отрасли промышленности
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url();?>main_cont/index">Главная</a>
      </li>
      <li class="breadcrumb-item active">Отрасль</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
     
      <div class="col-lg-12">
	  <h2>Ввод отрасли промышленности</h2>
	  <br>
       <form method="POST" action="">
	   <?php /*echo '<div>' .$sms.'</div>'*/ ?>
	     <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Наименование </label>
    <div class="col-sm-10">
      <input type="text"  name= "naim_o" class="form-control" id="inputEmail3" placeholder="Наименование отрасли">
    </div>
  </div>
 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" id="btn_otr">Ввести</button>
      <script>
        $(document).ready(function () {
            $("#btn_otr").click(function () {
                alert("отрасль введена!");
            });
        });
    </script>
    </div>
  </div>
</form>
        
      </div>
    </div>
	 
    <div class="row">
	<caption> <h2> Отрасли промышленности</h2></caption> 
			<table class="table">
			<th>№</th>	
			<th>Наименование</th>
			  </tr>
	<?php 
	if(isset($otrasl)){
    foreach($otrasl as $row):{
      echo '<tr><td>'.$row['id_o'].'</td><td>'.$row['naim_o'].'</td></tr>';
  }
endforeach;
}
echo('</table>');
echo('</div>');
echo('</div>');
echo('<br><br>');
?>
	
	
     




