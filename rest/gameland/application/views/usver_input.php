<?php

use function PHPSTORM_META\type;

$this->load->database();
?> 
<form action="http://gameland:8080/index.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login" name="usver_login">
    <small id="emailHelp" class="form-text text-muted">введите логин</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="usver_pass">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
  </div>
  <button type="submit" class="btn btn-primary">Ввод</button>
</form>
<br> 
<?php 
echo('<table class="table table-bordered table-dark">');
  echo('<thead>');
    echo('<tr>');
      echo ('<th scope="col">#</th>');
      echo('<th scope="col">Логин</th>');
      echo('<th scope="col">Пароль</th>');
      
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