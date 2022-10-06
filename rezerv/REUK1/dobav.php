<?php
	include 'template/header.php';
	include 'template/navbarmeneger.php';
	include 'template/datebase.php';
?>

</header>
<section>
<main>

 <div class="container col-sm-12">
     
 

<!-- Форма для ввода договора-->
<div class="container-fluid bg-white">
	<div class="container">
		<form class="mt-3" role="form" action="" method="POST">
		  <div class="form-row">
			<div class="col-xl-3">
			<label for="exampleInputfio1">ФИО сотрудника</label>
			<input type="varcharr" class="form-control" name="fio_sotrud" placeholder="Введите ФИО">
		  </div>
		<div class="col-xl-3">
			<label for="exampleInputDolgn1">Должность</label>
			<input type="varcharr" class="form-control" name="dolgn" placeholder="Введите должность">
		  </div>
		  <div class="col-xl-3">
			<label for="exampleInputPasport1">Паспортные данные</label>
			<input type="varcharr" class="form-control" name="pasportdannie" placeholder="Введите данние">
		  </div>
		  <div class="col-xl-3">
			<label for="exampleInputLogin1">Логин</label>
			<input type="varcharr" class="form-control" name="login" placeholder="Введите логин">
		  </div>
		  <div class="col-xl-3">
			<label for="exampleInputPassword1">Пароль</label>
			<input type="varcharr" class="form-control" name="password" placeholder="Введите паароль">
		  </div>
		  <div class="col-xl-3">
			<label for="exampleInputData1">Дата приема</label>
			<input type="date" class="form-control" name="data_priema" placeholder="Выберите дату">
		  </div>
		  <div class="col-xl-3">
			<label for="exampleInputRole1">Роль</label>
			<input type="integer" class="form-control" name="role" placeholder="Выберите роль">
		  </div>			  
		  <div class="col-xl-3">
		  <label style="visibility: hidden">asd</label>
			<input type="submit" value="Добавить" class="btn btn-primary form-control">
		  </div>
			</form>
	<table class="table table-bordered mt-3">
	  <thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">ФИО</th>
		  <th scope="col">Должность</th>
		  <th scope="col">Паспортные данные</th>
		  <th scope="col">Логин</th>
		  <th scope="col">Пароль</th>
		  <th scope="col">Дата приема</th>
		</tr>
	  </thead>
	  <tbody>
<?php


	if (!empty($_POST)){
	$sql = 'INSERT INTO sotrud (fio_sotrud,dolgn,pasportdannie,login,password,data_priem) VALUES ("'. $_POST['fio_sotrud'].'","'. $_POST['dolgn'].'","'. $_POST['pasportdannie'].'","'.$_POST['login'].'","'.$_POST['password'].'","'.$_POST['data_priema'].'")';
	//echo $sql;
		$result = mysqli_query($mysqli,$sql);
	}
	$result=$mysqli->query('select * from sotrud');
		while ($row = $result->fetch_array(MYSQL_ASSOC)) {	
		
		echo '<tr> <th scope="row">'.$row['id_sotrud'].'</th>';
		echo '<td>'.$row['fio_sotrud'].'</td>  <td>'.$row['dolgn'].'</td>  <td>'.$row['pasportdannie'].'</td> <td>'.$row['login'].'</td> <td>'.$row['password'].'</td>  <td>'.$row['data_priem'].'</td> </tr>';
	}	
		
?>	  	
	  </tbody>	
	</table>
</div>
	
	<div class="container-fluid bg-dark">	
	</div>
</div>
</div>
</div>
</main>
</section>
<?php
include 'template/footer.php';
?>
