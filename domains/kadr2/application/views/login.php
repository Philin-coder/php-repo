<?php 
/*


			if ($_SESSION['data_user']['status'] == 'Администратор') {
            header('Location: admin.php');
}}
	
*/
?>


  
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Авторизация</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url();?>main_cont/index">Главная </a>
      </li>
      <li class="breadcrumb-item active">Авторизация</li>
    </ol>

    <!-- Content Row -->
    
    <!-- Contact Form -->
  
    <div class="row">
      <div class="col-lg-12 ">
        <h3>Форма авторизации</h3>
		<br> 
   <br> 
   
        <form  action='<?php echo base_url()?>enter_cont/autor' method= 'POST' name="sentMessage" id="contactForm" novalidate>
		<?php 
    /*echo '<div>' .$msg.'</div>'*/ ?>
          <div class="control-group form-group">
            <div class="controls">
              <label>Логин:</label>
              <input type="text" name= "lgn" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Пароль:</label>
              <input type="password" name="pswd" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
        
          
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Войти</button>
        </form>
      </div>

    </div>
    <!-- /.row -->

  </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <br> 
   <br> <br> 
   <br> <br> 
   <br> 
  <br> 
   <br> 
  <br> 
   <br> 
  
  <br> 
   <br> <br> 
   <br> 
  
  
  
  

  <!-- Bootstrap core JavaScript -->



