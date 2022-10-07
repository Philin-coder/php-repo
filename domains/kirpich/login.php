<?
       include 'temp/head.php';
       include 'temp/header.php';
       
        $mysqli=new mysqli("localhost", "root", "","kirpich") or die(mysqli_error($link));
        $mysqli->set_charset("utf8");
        ?>
    
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Авторизация</li>
            </ol>
          </nav>
          <main>
          <section class="av">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                        <h3> Авторизация</h3>
                        <hr>
                      </div>

                  </div>

              </div>
              
            
          
              <div class="container">
                   <div class="row">
                       <div class="col-lg-12">
                           <p>Пройдите <a href="reg.php"> регистрацию</a> </p>
                        <form class="form">
                            <div class="col-lg-6">
                              <label for="inputlogin" class="form-label">Логин</label> 
                              <input type="email" class="form-control" placeholder="Введите логин" id="inputlogin">
                            </div>
                    
                            <div class="col-lg-6">
                              <label for="inputPassword4" class="form-label">Пароль</label>
                              <input type="password" class="form-control" placeholder="Введите пароль" id="inputPassword4">
                            </div>
                        <br>
                            <div class="col-6">
                              <button type="submit" class="btn btn-warning">Войти</button>
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