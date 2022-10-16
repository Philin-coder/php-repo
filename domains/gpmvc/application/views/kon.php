  <div class="slider">
    <div class="container">
     <!-- Content Row -->
     <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
		<iframe src="<?php echo base_url();?>public/images/kart.png" class="img-fluid" width="700" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>		
          </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
      <div class="center wow fadeInDown">
        <h2>ОБРАТНАЯ СВЯЗЬ</h2>
        </div>
        <p>
          Россия
          <br>г. Белая Калитва, Ростовская область
          <br>
        </p>
        <p>
          <abbr title="Phone">Телефон</abbr>: 8-(863)-555-35-35
        </p>
        <p>
          <abbr title="Email">E-mail</abbr>:
          <a href="">rekadr@google.com
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
      <div class="center wow fadeInDown">
        <h2>ПИШИТЕ НАМ</h2>
        </div>
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
    <br>
    <!-- /.row -->

  </div>
  </div>
  <!-- /.container -->
  