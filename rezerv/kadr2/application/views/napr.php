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
<?php
$sql=$this->db->get('vakansiya');
foreach($sql->result_array() as $row):{
   echo '<option value="'.$row['id_v'].'">'.$row['dolgn'].'</option>';
}
endforeach;
?>
</select>
	    </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Соискатель</label>
    <div class="col-sm-10">
	<select name="id_s" >
<?php

$sql=$this->db->get('soiskatel');
	foreach($sql->result_array() as $row):{
   echo '<option value="'.$row['id_s'].'">'.$row['fio_s'].'</option>';
}
endforeach;
 
    
     
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
      <button type="submit" class="btn btn-primary" id="btn">Ввести</button>
      <script>
        $(document).ready(function () {
            $("#btn").click(function () {
                alert("Направление введено!");
            });
        });
    </script>
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
        <?php  echo "<div class='alert_div'>.$msg.</div>";?>
	<?php 	
  if (isset($napravlenie)){
    foreach($napravlenie as $row):{
  
    	
    echo '<tr>
    <td>'.$row['n_n'].'</td>
    <td>'.$row['dolgn'].'</td>
    <td>'.$row['fio_s'].'</td>
    <td>'.$row['data_n'].'</td>
    <td>'.$row['data_p'].'</td>
    </tr>';
    }    
  endforeach;
  }
echo '</table>';
echo '</div>';
echo '</div>';
echo('<br><br>');
?>

