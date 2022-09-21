 
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Страница специалиста
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url(); ?>main_cont/index">Главная</a>
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
     //echo '<div>' .$sms.'</div>' 
     ?>
	     <div class="form-group row">   
    <label for="inputEmail3" class="col-sm-2 col-form-label">Номер направления</label>
    <div class="col-sm-10">
	<select name="n_nn" >
<?php
$sql=$this->db->get('napravlenie');


foreach($sql->result_array() as $row):{
  echo '<option value="'.$row['id_n'].'">'.$row['n_n'].'</option>';
}
endforeach;
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
      <button type="submit" class="btn btn-primary" id="rez_btn">Ввести</button>
      <script type="text/javascript">
      $(document).ready(function () {
            $("#rez_btn").click(function () {
                alert("Результвт направления успешно изменен");
            });
        });
    </script>
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
  if(isset($napravlenie)){
   foreach($napravlenie as $row):{ 
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
    endforeach;
  }
  echo '</table>';
  echo '</div>';
  echo '</div>';
  echo('<br><br>');

?>
	