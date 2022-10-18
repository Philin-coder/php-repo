  <div class="slider">
  <div class="container">
  <div class="center wow fadeInDown">
        <h2>Ввод профессии</h2>
     </div>
       <form method="POST" action="">
	   <?php //echo '<div>' .$sms.'</div>' ?>
	       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Отрасль</label>
    <div class="col-sm-10">
	<select name="naim_o" >
<?
$sql=$this->db->get('otrasl');
	foreach($sql->result_array() as $row):{
   echo '<option value="'.$row['id_o'].'">'.$row['naim_o'].'</option>';
}
endforeach;
?>
</select>
	    </div>
  </div>
	     <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Наименование профессии</label>
    <div class="col-sm-10">
      <input type="text"  name= "naim_p" class="form-control" id="inputEmail3" placeholder="Наименование профессии">
    </div>
  </div> 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Ввести</button>
    </div>
  </div>
</form>
<hr>   
    <div class="row">
	<caption> <h2> Профессии</h2></caption> 
			<table class="table">
			<th>Наименование отрасли</th>	
			<th>Наименование профессии</th>
			  </tr>
	<?php 	
  if(isset($prof)){
 			foreach($prof as $row):{			
 	echo '<tr><td>'.$row['naim_o'].'</td><td>'.$row['naim_p'].'</td></tr>';
      }     
    endforeach;
    echo('</table>');
    echo('</div>');
    echo('</div>');
    echo('</div>');
    echo('</div>');
    }    
?>
	
       