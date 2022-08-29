<?php 
session_start();
include 'temp/head.php';
include 'temp/nav_d.php';
 ?>
  <!-- Page Content -->
  <div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Страница директора
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Главная</a>
      </li>
      <li class="breadcrumb-item active">Страница директора</li>
    </ol>
    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-12">
        <center><img class="img-fluid rounded mb-4" src="img/upr.jpg" alt=""></center>
      </div>
      <div class="col-lg-12">
        <h2>Страница директора</h2>
        <p> Директор – пользователь, который имеет право на просмотр отчётов</p>		        
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


