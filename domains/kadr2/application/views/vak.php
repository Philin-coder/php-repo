<?php 
/*
 
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
<?php
$sql=$this->db->get('rabotodatel');
foreach($sql->result_array() as $row):{
   echo '<option value="'.$row['id_r'].'">'.$row['naim_r'].'</option>';
  }
endforeach;
?>
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
<?php

$sql =$this->db->get('prof');
	foreach($sql->result_array() as $row):{
   echo '<option value="'.$row['id_p'].'">'.$row['naim_p'].'</option>';
}
endforeach;
?>
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
  if(isset($vakansiya)){
    foreach($vakansiya as $row):{       
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
  endforeach;
    echo('</table>');
    echo('</div>');
    echo('</div>');
    echo('<br><br>');
  }  
?>
	