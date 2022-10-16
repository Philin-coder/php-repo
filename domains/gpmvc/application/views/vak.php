<?php 
//session_start();
//$sms=" "; 
// $conn = new mysqli('localhost','root','','rekadr');
// if ($conn->connect_error){ echo ("Ошибка соединения с сервером MySQLI: ").$conn->connect_error."<br>";
//      die("Соединение установлено не было.");}
// //установим кодировку
// $conn  ->set_charset("utf8");

// include 'temp/head.php';
// include 'temp/header.php';
 ?>
  <div class="slider">
    <div class="container">
    <div class="center wow fadeInDown">
        <h2>ВАКАНСИИ</h2>
    </div>
    <?php
if ((isset($_GET['page_no']) && $_GET['page_no']!="" && isset($res))) {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }
	
$total_records_per_page = 4;

$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";
//$result_count = mysqli_query($conn,"SELECT COUNT(*) as total_records FROM vakansiya");
$result_cont=$res;
	$total_records=$res; //mysqli_fetch_array($result_count);
	//$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($res / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1

/* 
$sql ="SELECT COUNT(*) As total_records FROM 'vakansiya'";
$result_count=$conn->query($sql);
/* $total_records = mysqli_fetch_array($result_count); */
/* $total_records=$result_count->fetch_array(MYSQLI_NUM);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page); */ 
/* $second_last = $total_no_of_pages - 1; */ // total pages minus 1

/* $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `vakansiya`"); */
/* $total_records = mysqli_fetch_array($result_count); */


 ?>	
<div class="row">
	<caption> <h2> Вакансии</h2></caption> 
			<table id="example" class="table table-striped" cellspacing="0" width="100%">
			
			<tr>
			<th>Наименование должности</th>	
			<th>Зарплата от</th>
			<th>Занятость</th>
			  </tr>
<?php 
if(isset($sel_vak)){
	foreach($sel_vak as $row):
		{
			echo '<tr><td>'.$row['dolgn'].'</td><td>'.$row['oklad'].'&nbsp; руб.</td><td>'.$row['tip_zan'].'</td></tr>';
		}
		endforeach;
}
//$result = mysqli_query($conn,"SELECT dolgn,oklad,tip_zan FROM vakansiya LIMIT $offset, $total_records_per_page");
/*
while($row = mysqli_fetch_array($result)){			
	echo '<tr><td>'.$row['dolgn'].'</td><td>'.$row['oklad'].'&nbsp; руб.</td><td>'.$row['tip_zan'].'</td></tr>';
    }
	mysqli_close($conn);
	*/
  ?>	
</table>
	
<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Страница <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>
</div>
<div class="row">
<ul class="pagination">
	<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
	<li class='page-item ' <?php if($page_no <= 1){ echo "class='disabled' class='page-item ' "; } ?>>
	<a class='page-link' <?php if($page_no > 1){ echo " class='page-link' href='?page_no=$previous_page'"; } ?>>&laquo; Предыдущая</a>
	</li>
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active' class='page-item' ><a class='page-link'  >$counter</a></li>";	
				}else{
           echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active' class='page-item' ><a class='page-link' >$counter</a></li>";	
				}else{
           echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li class='page-item' ><a class='page-link'>...</a></li>";
		echo "<li class='page-item' ><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
		echo "<li class='page-item' ><a class='page-link' href='?page_no=2'>2</a></li>";
        echo "<li class='page-item'><a class='page-link' >...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active' 'page-item' ><a class='page-link'  >$counter</a></li>";	
				}else{
           echo "<li class='page-item'  ><a class='page-link'  href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li class='page-item' ><a class='page-link' >...</a></li>";
	   echo "<li class='page-item' ><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li class='page-item' ><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li class='page-item' ><a class='page-link' href='?page_no=1'>1</a></li>";
		echo "<li class='page-item' ><a class='page-link' href='?page_no=2'>2</a></li>";
        echo "<li class='page-item' ><a class='page-link' >...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li  class='page-item' class='active'><a class='page-link' >$counter</a></li>";	
				}else{
           echo "<li class='page-item' ><a  class='page-link' href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    
	<li  class='page-item ' <?php if($page_no >= $total_no_of_pages){ echo "class='disabled' class='page-item'"; } ?>>
	<a class='page-link' <?php if($page_no < $total_no_of_pages) { echo " class='page-link' href='?page_no=$next_page'"; } ?>>Следующая</a>
	</li>
    <?php if($page_no < $total_no_of_pages){
		echo "<li class='page-item' ><a  class='page-link' href='?page_no=$total_no_of_pages'>Последняя &rsaquo;&rsaquo;</a></li>";
		} ?>
</ul>
</div>
    </div>
  </div>
