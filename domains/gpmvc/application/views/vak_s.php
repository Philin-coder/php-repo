  <br>
  <div class="slider">
    <div class="container">
     <div class="center wow fadeInDown">
        <h2>Ввод вакансии</h2>
     </div>
       <form method="POST" action="">
       
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Работодатель</label>
    <div class="col-sm-10">
	<select name="naim_r" >
<?php
$sql=$this->db->get('rabotodatel'); 
	foreach($sql->result_array() as $row ):{
   echo '<option value="'.$row['id_r'].'">'.$row['naim_r'].'</option>';
}
endforeach;
?>
</select>
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
$sql=$this->db->get('prof'); 
	foreach ($sql->result_array() as $row):{
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
  <hr>
</form>
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
  if(isset($vak)){
          foreach($vak as $row):{			
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
  }
  echo('</table>');
  for($i=0;$i<=3;$i++){
    echo('</div>');
  }
?>
	

