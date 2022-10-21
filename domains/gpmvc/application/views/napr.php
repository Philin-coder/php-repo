<?php 
//  session_start();
//  $sms=" "; 
//  $conn = new mysqli('localhost','root','','rekadr');
//  if ($conn->connect_error){ echo ("Ошибка соединения с сервером MySQLI: ").$conn->connect_error."<br>";
//   die("Соединение установлено не было.");}
//  //установим кодировку
//  $conn  ->set_charset("utf8");
//  if (!empty($_POST)) 
//  { 
//  $n_n=$_POST['n_n'];
//  $id_v=$_POST['id_v'];
//  $id_s=$_POST['id_s'];
//  $data_n=$_POST['data_n'];
//  // добавление записи
//  $sql =$conn->query ("insert into napravlenie(n_n, id_v, id_s, data_n) values 
//  ('$n_n', '$id_v', '$id_s', '$data_n')");			 
// header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/napr.php");
//  } 
//  include 'temp/head.php';
//  include 'temp/header_s.php';
?>
  <br> <br> <br> <br> 
<section id="slider">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2>Ввод направления</h2>
    </div>    
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
	      <select name="id_v" class="form-control" id="inputEmail3" >
        <?php
         $sql=$this->db->get('vakansiya'); 

	       foreach ($sql->result_array() as $row ):{
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
	      <select name="id_s" class="form-control" id="inputEmail3" >
         <?php
           $sql=$this->db->get('soiskatel');
	         foreach ($sql->result_array() as $row ):{
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
       <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Ввести</button>
       </div>
      </div>
    </form>	    
    </div> 
    </div> 
	<?php foreach($napr as $row):?>
    <?php        
	// $result=$conn->query( "select n_n, dolgn, fio_s, data_n, naim_r from napravlenie, vakansiya, soiskatel, rabotodatel  where
	// vakansiya.id_v=napravlenie.id_v and soiskatel.id_s=napravlenie.id_s  and rabotodatel.id_r=vakansiya.id_r ");
		
	// $row = mysqli_fetch_array($result);	
         
		?>

<div class="slider">
    <div class="container">    
    <div class="row">
      <div class="col-lg-12">
 <table align="center" style="border-color: #FF9900"  border="2" cellpadding="1" cellspacing="1" style="width: 900px">
	<tbody>
	
		<tr>
			<td style="text-align: center; vertical-align: middle;"><span style="font-family: Arial, Helvetica, sans-serif;"><img class="img-responsive" src="<?php echo base_url();?>public/images/logo.png" alt="">&nbsp;</span></td>
			<td style="text-align: right;">
				<p><font size="4"><font face="Tahoma, Geneva, sans-serif"><font color="#000000">Кадровое агентство &quot;РеКадр&quot;</font></font></font></p>
				<p><font color="#000000"><font face="Tahoma, Geneva, sans-serif"><font color="#000000"><span style="color: #333333; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; background-color: #ffffff;">г. Белая Калитва, Ростовская область</span></font></font></font></p>
				<p><font color="#000000"><font face="Tahoma, Geneva, sans-serif"><font color="#000000"><span style="color: #333333; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; background-color: #ffffff;">ул. Ленина 128</span></font></font></font></p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: justify;">&nbsp;</td>
		</tr>
		<tr>
  <?php
		echo '
			<td colspan="2" style="text-align: center;"><span style="font-family: Arial, Helvetica, sans-serif;">&nbsp; &nbsp;&nbsp; &nbsp;<font size="5">НАПРАВЛЕНИЕ НА РАБОТУ №  '.$row['n_n'].'  </font></span>&nbsp; &nbsp; &nbsp; &nbsp;</td>'?>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;">&nbsp;</td>
		</tr>
		<tr>
		<?php
		echo '
			<td colspan="2" style="text-align: center;"><font size="5"><u>   '.$row['data_n'].'  </u></font></td>'?>
	
		</tr>
		<tr>
		
			<td colspan="2" style="text-align: center;"><font size="4">(дата выдачи направления)</font></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;">&nbsp;</td>
		</tr>
		<tr>
		<?php echo '
			<td colspan="2" style="text-align: center;"><font size="5"><u>' .$row['naim_r'].'  </u></font></td>'?>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><font size="4">(наименование учреждения куда направляется работник)</font></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2"><font size="5"><font face="Arial, Helvetica, sans-serif">Направляется для трудоустройства на работу&nbsp;</font></font></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
		<?php echo '
			<td colspan="2"><font size="5"><font face="Arial, Helvetica, sans-serif">гр. ___ФИО: ' .  $row['fio_s'].'   </font></font></td>'?>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
		<?php echo'
			<td colspan="2"><font size="5"><font face="Arial, Helvetica, sans-serif">в качестве <u> ' . $row['dolgn'].'  &nbsp;</u></font></font></td>'?>
		</tr>
	
		<tr>
			<td colspan="2" style="text-align: center;"><font size="4"><font face="Arial, Helvetica, sans-serif">  </font></font></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: justify;"><font size="5"><font face="Arial, Helvetica, sans-serif">На основании Извещения о наличии свободных рабочих мест (вакансий) по состоянию на ___дата__</font></font></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: justify;">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: justify;"><font face="Arial, Helvetica, sans-serif"><font size="5">Специалист агентства &quot;РеКадр&quot; </font>__________________(подпись)</font></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: justify;">&nbsp;</td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>

      
      </div>
    </div>
    </div>

    </div> 


</section> 	
  