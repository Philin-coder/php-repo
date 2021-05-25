<?php 
 session_start();
 $sms=" "; 
 $conn = new mysqli('localhost','root','','rekadr');
 if ($conn->connect_error){ echo ("Ошибка соединения с сервером MySQLI: ").$conn->connect_error."<br>";
 die("Соединение установлено не было.");}
 //установим кодировку
 $conn  ->set_charset("utf8");
 if (!empty($_POST)) 
 {  
  $rezultat=$_POST['rezultat'];
  $prim=$_POST['prim'];
  $n=$_POST['n_nn'];
  $data_p=$_POST['data_p']; 
  // добавление записи
  /* $sql =$conn->query ("UPDATE napravlenie SET rezultat='$rezultat', prim='$prim' where id_n='$n'" ); */
  $sql =$conn->query ("insert into napravlenie (data_p, n_n,rezultat, prim) values ('$data_p', '$n','$rezultat','$prim')" );		
  header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/rez_n.php"); 
  $sms = "Результат направления введен !";
 }
 include 'temp/head.php';
 include 'temp/header_s.php';
?>
  <br>
<div class="slider">
 <div class="container">
 <form>
  <div class="center wow fadeInDown">
   <h2>Результат направления</h2>
  </div>
  <form method="POST" action="">
	 <?php echo '<div>' .$sms.'</div>' ?>
    <div class="form-group row">  	
     <label for="inputEmail3" class="col-sm-2 col-form-label">Дата посещения организации </label>
      <div class="col-sm-10">
       <input type="date"  name= "data_p" class="form-control" id="inputEmail3" placeholder="Дата посещения">
      </div>
    </div>
	  <div class="form-group row">  							
     <label for="inputEmail3" class="col-sm-2 col-form-label">Номер направления</label>
      <div class="col-sm-10">
       <input type="text"  name= "n_nn" class="form-control" id="inputEmail3" placeholder="Номер направления">
      </div>
    </div> 
	   <div class="form-group row">    
      <label for="inputEmail3" class="col-sm-2 col-form-label">Результат </label>
       <div class="col-sm-10">
        <select class="form-control" name="rezultat">
								      <option>Принят</option>
								      <option>Не принят</option>
	      </select>
       </div>
     </div>
		 <div class="form-group row">  							
      <label for="inputEmail3" class="col-sm-2 col-form-label">Примечание</label>
       <div class="col-sm-10">
        <input type="text"  name= "prim" class="form-control" id="inputEmail3" placeholder="Примечание">
       </div>
     </div> 
     <div class="form-group row">
      <div class="col-sm-10">
       <button type="submit" class="btn btn-primary">Ввести</button>
      </div>
     </div>
  <hr>
 </form>        
</div>
</div> 
<div class="container">   	 
 <div class="row"> 
	<caption> <h2> Направление</h2></caption> 
   <table class="table">
      <tr>				
			      <th>Номер направления</th>
            <th>Вакансия</th>
            <th>Соискатель</th>
            <th>Дата направления</th>
            <th>Дата посещения</th>
            <th>Результат</th>
            <th>Примечание</th>
	    </tr>
	  <?php 	
    $sql = "select n_n, dolgn, fio_s, data_n, data_p, rezultat, prim from napravlenie, vakansiya, soiskatel 
    where vakansiya.id_v=napravlenie.id_v and soiskatel.id_s=napravlenie.id_s ";		
		$result=$conn->query($sql);		
		while (($row = $result->fetch_array())){			
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
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
	 </table>
  </div> 
</div>  
  <?php 
  include 'temp/footer_s.php'; 
  ?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>