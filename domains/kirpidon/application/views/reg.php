<?
       include 'temp/head.php';
       include 'temp/header.php';
       
        $mysqli=new mysqli("localhost", "root", "","kirpich") or die(mysqli_error($link));
        $mysqli->set_charset("utf8");
        if (!empty($_POST))
 {
$fio=$_POST['fio']; 
$login=$_POST['login']; 
$pass=$_POST['pass']; 
$status=$_POST['status'];
$sql="insert into user (login, pass, fio, status) values ('$login', '$pass', '$fio','$status')"; 
var_dump($sql);
$result=$mysqli->query($sql); 

} ?> 

        
    
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
                              <input type="text" name='fio' class="form-control" placeholder="Введите ФИО" id="inputfio">
                            </div>
                            <div class="col-lg-6">
                              <label for="inputlogin" class="form-label">Логин</label> 
                              <input type="text" name='login' class="form-control" placeholder="Введите логин" id="inputlogin">
                            </div>
                    
                            <div class="col-lg-6">
                              <label for="inputPassword4" class="form-label">Пароль</label>
                              <input type="password" class="form-control" name='pass' placeholder="Введите пароль" id="inputPassword4">
                            </div>
                            <div class="col-lg-6">
                            <select name='status' class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
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