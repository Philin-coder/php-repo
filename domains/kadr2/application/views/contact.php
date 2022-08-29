<?php 
include 'temp/head.php';
include 'temp/nav.php';

 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Наши контакты
    
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Главная </a>
      </li>
      <li class="breadcrumb-item active">Контакты</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42572.89783979782!2d40.75086267764268!3d48.17181792285256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x411dddad326b2641%3A0x32f4998d8ff780c4!2z0JHQtdC70LDRjyDQmtCw0LvQuNGC0LLQsCwg0KDQvtGB0YLQvtCy0YHQutCw0Y8g0L7QsdC7Lg!5e0!3m2!1sru!2sru!4v1585771355095!5m2!1sru!2sru" width="700" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>		
          </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Обратная связь</h3>
        <p>
          Россия
          <br>г. Белая Калитва, Ростовская область
          <br>
        </p>
        <p>
          <abbr title="Phone">Телефон</abbr>: (000) 000-0000
        </p>
        <p>
          <abbr title="Email">E-mail</abbr>:
          <a href="mailto:name@example.com">name@example.com
          </a>
        </p>
        <p>
          <abbr title="Hours">Время приема</abbr>: Понедельник - Пятница: 9:00 до 18:00
        </p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
  
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Пишите нам</h3>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Имя:</label>
              <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Телефон:</label>
              <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>E-mail:</label>
              <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Текст:</label>
              <textarea rows="7" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Отправить</button>
        </form>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php 
  include 'temp/footer.php'; 
?>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>
