<?php 
/*
$id_user = $_SESSION ['id_user']; 
$status=$_POST['status'];
*/


/*
$fio=$_POST['fio']; 
$login=$_POST['login']; 
$password=$_POST['password']; 
$status=$_POST['status'];
// добавление записи
		$sql = ("insert into users (login, password, fio_user, status) values ('$login', '$password', '$fio','$status')"); 
		var_dump($sql);
$result=mysqli_query($conn,$sql); 
$msg  = "Пользователь успешно зарегистрирован!"; 
} 
*/
 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Регистрация сотрудников
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url();?>main_cont/index">Главная</a>
      </li>
      <li class="breadcrumb-item active">Регистрация</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
     
      <div class="col-lg-12">
	  <h2>Форма регистрации</h2>
	  <br>
       <form method="POST" action="">
	   <?php 
     /*
     echo '<div>' .$msg.'</div>'
     */ ?>
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
        
      </div>
    </div>
	 
    <div class="row">
	<caption> <h2> Список пользователей</h2></caption> 
			<table class="table">
			
		
			<th>Логин</th>
			<th>Пароль</th>
			<th>ФИО сотрудника</th>
        <th>Статус</th>
                </tr>
	<?php 
  /*
	$conn = mysqli_connect('localhost','root','','rekadr');
		$sql = 'select login, password, fio_user, status from users ';
			
		$result= mysqli_query($conn, $sql) or die(mysqli_error($conn));
		
			while ($row = mysqli_fetch_array($result)){			
	echo '<tr><td>'.$row['login'].'</td><td>'.$row['password'].'</td><td>'.$row['fio_user'].'</td><td>'.$row['status'].'</td></tr>';
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




