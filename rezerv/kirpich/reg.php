<?php
       include 'temp/head.php';
       include 'temp/header.php';
       
        $con=new mysqli('localhost', 'root', '','kirpich') ;
        $con->set_charset("utf8");

 ?> 
 <?php 
 if (!empty($_POST))
 {
$fio=$_POST['fio']; 
$email='test';
$login=$_POST['login']; 
$pass=$_POST['pass']; 
$status=$_POST['status'];
$sql=$con->query("insert into users(fio,milo,login,parol,rol)values('$fio','$email','$login','$parol','$status')"); 
echo($sql);
$result=$con->query($sql);
 }
 ?>


        
    
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Регистрация</li>
            </ol>
          </nav>
          <main>
          <section class="av">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                        <h3> Регистрация</h3>
                        <hr>
                      </div>

                  </div>

              </div>
              
            
          
              <div class="container">
                   <div class="row">
                       <div class="col-lg-12">
                        <form class="form" metod='POST'>
                        <div class="col-lg-6">
                              <label for="inputfio" class="form-label">ФИО</label> 
                              <input type="text"  class="form-control" placeholder="Введите ФИО" id="inputfio" name="fio">
                            </div>
                            <div class="col-lg-6">
                              <label for="inputlogin" class="form-label">Логин</label> 
                              <input type="text"  class="form-control" placeholder="Введите логин" id="inputlogin" name="login">
                            </div>
                    
                            <div class="col-lg-6">
                              <label for="inputPassword4" class="form-label">Пароль</label>
                              <input type="password" class="form-control"  placeholder="Введите пароль" id="inputPassword4" name="pass">
                            </div>
                            <div class="col-lg-6">
                            <select  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="status">
  <option selected>выберите роль </option>
  <option value="1">менеджер</option>
  <option value="2">клиент</option>
  
</select>
</div>

                        <br>
                            <div class="col-6">
                              <button type="submit" class="btn btn-warning">Регистрация</button>
                            </div>
                          </form>
                            </div>
                               </div>
              </div>
          </section>
          
            

    </main>
<footer class="foot">
    

    
        <div class="container">
            <div class="row">
                
            <div class="col-lg-12">
              <div class="col-lg-3">
12
              </div>
              <div class="col-lg-3">
12
            </div>
            <div class="col-lg-6">
1
            </div>
        </div>
            </div>

        
    </div>
        </footer>
    
</body>
</html>