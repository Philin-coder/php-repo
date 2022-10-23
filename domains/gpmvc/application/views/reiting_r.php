  <br>
 <br>
 <br>
 <br>
  <div class="slider">
    <div class="container">
      <div class="center wow fadeInDown">
        <h2>Рейтинг работодателей</h2>
      </div>
    <div class="row">
      <div class="col-lg-12">
      <form method="POST" action="">
	   <!-- <?php echo '<div>' .$sms.'</div>' ?> -->
    <div class="form-group row">  	
     <label for="inputEmail3" class="col-sm-2 col-form-label">Дата с:</label>
    <div class="col-sm-10">
      <input type="date"  name= "d1" class="form-control" id="inputEmail3" placeholder=" ">
    </div>
    </div>
        <div class="form-group row">  	
     <label for="inputEmail3" class="col-sm-2 col-form-label">Дата по:</label>
    <div class="col-sm-10">
      <input type="date"  name= "d2" class="form-control" id="inputEmail3" placeholder=" ">
    </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Показать</button>
    </div>
  </div>
  </form>
    <div class="row"> 
    <caption> <h2> Рейтинг работодателей</h2></caption>
			<table class="table">
      <tr>
 			 <th>Работодатель</th>		
			 <th>Количество вакансий</th>
       <th>Средняя зарплата</th>
			</tr>
  <?php
  // $conn = new mysqli('localhost','root','','rekadr');
  // if ($conn->connect_error){ echo ("Ошибка соединения с сервером MySQLI: ").$conn->connect_error."<br>";
  //      die("Соединение установлено не было.");}
   //установим кодировку
  // $conn  ->set_charset("utf8"); 
  // $d1=$_POST['d1'];
  // $d2=$_POST['d2'];
    // $sql = "select naim_r, SUM(case when data_razm between '$d1' and '$d2' then 1 else 0 end) As 'Кол-во вакансий',
    // avg(case when data_razm between '$d1' and '$d2' then oklad end) AS 'Средняя зарплата' 
    // from rabotodatel, vakansiya, napravlenie where vakansiya.id_v=napravlenie.id_v and rabotodatel.id_r=vakansiya.id_r
    // group by naim_r  ";		
		// $result=$conn->query($sql);			
    if (isset($report)){

			foreach ($report as $row):{			
    echo '<tr>
    <td>'.$row['naim_r'].'</td>
    <td>'.$row['Кол-во вакансий'].'</td>
    <td>'.$row['Средняя зарплата'].'</td>
    </tr>';
    }    
  endforeach;
  }

?>
	</table>    
      </div>
    </div>
    </div>
  </div>
  </div>
      <!-- Footer -->
  