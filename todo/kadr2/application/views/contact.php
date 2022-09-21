  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Наши контакты
    
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url();?>main_cont/index">Главная </a>
      </li>
      <li class="breadcrumb-item active">Контакты</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21709.052504823077!2d42.44574743399713!3d47.145483854601785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x410299a6836a3627%3A0xae310263bf4b2bbc!2z0JfQuNC80L7QstC90LjQutC4LCDQoNC-0YHRgtC-0LLRgdC60LDRjyDQvtCx0Lsu!5e0!3m2!1sru!2sru!4v1661786928553!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>Обратная связь</h3>
        <p>
          Россия
          <br>п. Зимовники, Ростовская область
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

  <!-- Bootstrap core JavaScript -->




