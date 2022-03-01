<?php
$this->load->database();
?> 
<form action="http://gameland:8080/del_usvercont" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">user</label>
    <select name="s_user">
    <?
    $sql=$this->db->get('sm.usver');
    foreach ($sql->result_array() as $r) {
        echo '<option value="'.$r['id_usver'].'">'.$r['usver_login'].'</option>';
    }
    ?>
</select>
  </div>
  <button type="submit" class="btn btn-primary">удалить</button>
</form>
<br> 
<?php 
echo('<table class="table table-bordered table-dark">');
  echo('<thead>');
    echo('<tr>');
      echo ('<th scope="col">#</th>');
      echo('<th scope="col">Пароль</th>');
      echo('<th scope="col">Логин</th>');
      
    echo('</tr>');
  echo('</thead>');
  echo('<tbody>');
  
   
     
   foreach  ($rows as $row){
						echo'<tr>';
							echo"<td>".$row["id_usver"]."</td>";
							echo"<td>".$row["usver_pass"]."</td>";
							echo"<td>".$row["usver_login"]."</td>";
					
						echo ('</tr>');
				 } 
  echo('</tbody>');
echo('</table>');