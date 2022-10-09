   
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>main_con/index">Главная</a></li>
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
                           <p>Пройдите<a href="<?php echo base_url();?>reg_cont/index"> регистрацию</a> </p>
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
