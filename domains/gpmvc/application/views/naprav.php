<?php
session_start();
$conn = new mysqli('localhost','root','','rekadr');
if ($conn->connect_error){ echo ("Ошибка соединения с сервером MySQLI: ").$conn->connect_error."<br>";
     die("Соединение установлено не было.");}
 //установим кодировку
$conn  ->set_charset("utf8"); 
 include 'temp/head.php';
 include 'temp/header_s.php';
?>	
<br><br>
	<?php        
	$sql = "select n_n, dolgn, fio_s, data_n, naim_r from napravlenie, vakansiya, soiskatel, rabotodatel  where
	vakansiya.id_v=napravlenie.id_v and soiskatel.id_s=napravlenie.id_s  and rabotodatel.id_r=vakansiya.id_r ";
	$result=$conn->query($sql);		
              
		?>
<div class="slider">
    <div class="container">    
    <div class="row">
      <div class="col-lg-12">
 <table align="center" style="border-color: #FF9900"  border="2" cellpadding="1" cellspacing="1" style="width: 900px">
	<tbody>
		<tr>
			<td style="text-align: center; vertical-align: middle;"><span style="font-family: Arial, Helvetica, sans-serif;"><img class="img-responsive" src="images/logo.png" alt="">&nbsp;</span></td>
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
		while (($row = $result->fetch_array())){ 
		<?php
		echo '
			<td colspan="2" style="text-align: center;"><span style="font-family: Arial, Helvetica, sans-serif;">&nbsp; &nbsp;&nbsp; &nbsp;<font size="5">НАПРАВЛЕНИЕ НА РАБОТУ №  '.$row['n_n'].'  </font></span>&nbsp; &nbsp; &nbsp; &nbsp;</td>' ; ?>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;">&nbsp;</td>
		</tr>
		<tr>
		echo '
			<td colspan="2" style="text-align: center;"><font size="5"><u>   '.$row['data_n'].'  </u></font></td>'
			; 
		}
		?>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><font size="4">(дата выдачи направления)</font></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;">&nbsp;</td>
		</tr>
		<tr>
		
			<td colspan="2" style="text-align: center;"><font size="5"><u> <?php echo $row['naim_r'] ?> </u></font></td>
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
		
			<td colspan="2"><font size="5"><font face="Arial, Helvetica, sans-serif">гр. ___ФИО:  <?php echo $row['fio_s'] ?> </font></font></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
		
			<td colspan="2"><font size="5"><font face="Arial, Helvetica, sans-serif">в качестве <u> <?php echo $row['id_v'] ?> &nbsp;</u></font></font></td>
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
	</tbody>
</table>

      
      </div>
    </div>
    </div>

    </div> 
    <!-- Footer -->
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