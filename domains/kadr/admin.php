<?php 
session_start();
include 'temp/head.php';
include 'temp/nav_a.php';

 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Страница администратора
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Главная</a>
      </li>
      <li class="breadcrumb-item active">Страница администратора</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-12">
        <center><img class="img-fluid rounded mb-4" src="img/adm.jpg" alt=""></center>
      </div>
      <div class="col-lg-12">
        <h2>Страница администратора</h2>
        <p>Администратор – пользователь, который имеет право на ввод и редактирование данных web-приложения для кадрового агенства "РеКадр", а также, раздачу прав остальным пользователям.</p>


        
      </div>
    </div>
   

  </div>
 
</body>
  <!-- Footer -->
  <?php 
  include 'temp/footer.php'; 
?>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>



</html>
