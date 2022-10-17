  <div class="slider">
    <div class="container">
    <div class="center wow fadeInDown">
        <h2>Регистрация сотрудника</h2>
     </div>
    <form method="POST" action="">
	   <?php //echo '<div>' .$msg.'</div>' ?>
	     <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ФИО</label>
    <div class="col-sm-10">
      <input type="text"  name= "fio" class="form-control" id="inputEmail3" placeholder="ФИО">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Логин</label>
    <div class="col-sm-10">
      <input type="text" name= "login" class="form-control" id="inputPassword3" placeholder="Логин">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
    <div class="col-sm-10">
      <input type="password" name= "password"  class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
    <div class="form-group row">
	 <label for="inputPassword3" class="col-sm-2 col-form-label">Статус</label>
	 <div class="col-sm-10">
  <select name ="status" id="inputState" class="form-control">
    <option selected>Выбрать...</option>
    <option>Специалист</option>
	<option>Директор</option>
	 </select>
		</div>                                 
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Зарегистрировать</button>
    </div>
  </div>
</form>
<div class="row">
	<caption> <h2> Список пользователей</h2></caption> 
			<table class="table">		
			<th>Логин</th>
			<th>Пароль</th>
			<th>ФИО сотрудника</th>
        <th>Статус</th>
                </tr>
	<?php 
  if(isset($user)){

 			foreach($user as $row):{			
 	echo '<tr><td>'.$row['login'].'</td><td>'.$row['password'].'</td><td>'.$row['fio_user'].'</td><td>'.$row['status'].'</td></tr>';
     }    
    endforeach;

    }
    echo '</table>';
    echo('<div>');
      echo('</div>');
      echo('</div>');
    
?>
	
</div>
    </div>
  </div>
      <!-- Footer -->
 