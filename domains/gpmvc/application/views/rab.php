  <br>
    <div class="slider">
    <div class="container">
     <div class="center wow fadeInDown">
        <h2>Ввод работодателя</h2>
     </div>
       <form method="POST" action="">
	   
     <div class="form-group row">
         <label for="inputEmail3" class="col-sm-2 col-form-label">Дата регистрации</label>
    <div class="col-sm-10">
      <input type="date"  name= "d_r" class="form-control" id="inputEmail3" placeholder="Дата регистрации">
    </div>
	</div>
	     <div class="form-group row">
         <label for="inputEmail3" class="col-sm-2 col-form-label">Наименование </label>
    <div class="col-sm-10">
      <input type="text"  name= "naim_r" class="form-control" id="inputEmail3" placeholder="Наименование">
    </div>
	</div>
	 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Телефон </label>
    <div class="col-sm-10">
      <input type="text"  name= "tel_r" class="form-control" id="inputEmail3" placeholder="Телефон">
    </div></div>
	 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Контактное лицо должность </label>
    <div class="col-sm-10">
      <input type="text"  name= "kl_d" class="form-control" id="inputEmail3" placeholder="Контактное лицо должность">
    </div></div>
	 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Контактное лицо ФИО </label>
    <div class="col-sm-10">
      <input type="text"  name= "kl_fio" class="form-control" id="inputEmail3" placeholder="Контактное лицо ФИО">
    </div></div>
	 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Адрес</label>
    <div class="col-sm-10">
      <input type="text"  name= "adres_r" class="form-control" id="inputEmail3" placeholder="Адрес">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Ввести</button>
    </div>
  </div>
</form>        
    <div class="row">
	<caption> <h2> Работодатель</h2></caption> 
			<table class="table">
      <tr>
 			      <th>№</th>
            <th>Дата регистрации</th>	
			      <th>Наименование</th>
            <th>Телефон</th>
            <th>Контактное лицо должность</th>
            <th>Контактное лицо ФИО</th>
            <th>Адрес</th>
			</tr>
	<?php 	
  if(isset($rab)){
			foreach($rab as $row):{			
    echo '<tr>
    <td>'.$row['id_r'].'</td>
    <td>'.$row['d_r'].'</td>
    <td>'.$row['naim_r'].'</td>
    <td>'.$row['tel_r'].'</td>
    <td>'.$row['kl_d'].'</td>
    <td>'.$row['kl_fio'].'</td>
    <td>'.$row['adres_r'].'</td>
    </tr>';
    }    
  endforeach;
  }
echo('</table>');
for ($i = 0; $i<=3;$i++){
  echo('</div>');
}
?>
	
  
      
 