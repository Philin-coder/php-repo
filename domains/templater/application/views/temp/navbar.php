<nav class="navbar navbar-expand-sm navbar-dark">
    <div class="container">
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#n_bar" aria-controls="navbarNavAltMarkup" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="n_bar">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>first_cont/index">foreach</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>second_cont/index">foreicher</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>third_cont/index">Calculator</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>fourth_controller/index">Получить IP</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>fith_cont/index">Время(часы и минуты)</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>Pass_cont/index">Генерация пароля</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>echo_cont/index">Простой применр передачи данных (POST)</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>collect_cont/index">Сбор информации с web-страницы</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>clone_cont/index">Вывод  информации с web-страницы на Local</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>text_area_reader_cont/index">Чтение textarea</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>another_counter_cont/index">Еше один калькулятор(валидация)</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>date_cont/index">Дата(день, месяц, год)</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>hello_cont/index">Простй hello world</a></li>
                <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
   Статические контроллеры
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="<?php echo base_url();?>first_static_cont/index">Первый </a></li>
    <li><a class="dropdown-item" href="<?php echo base_url();?>second_static_cont/index">Второй</a></li>
    
  </ul>
</div>
            </ul>
        </div>
    </div>
  </nav>