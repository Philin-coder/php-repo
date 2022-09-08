<nav class="navbar fixed-top navbar-expand-lg navbar-light  " style="background-color: #ffffff; ">
    <div class="container">
    <a class="navbar-brand" href="<?php echo base_url();?>main_cont/index"><img src="<?php echo base_url();?>public/img/logo1.png"> </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="klient.php">Список клиентов, желающих получить работу по профессии</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="spisok_vak.php">Вакансии по профессии</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="rab.php">Отчет о работодателях </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="trud.php">Отчет о трудоустроенных</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="r_prof.php">Рейтинг профессий </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reiting.php">Рейтинг работодателей </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sv.php">Сводный отчет </a>
          </li>
             <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>enter_cont/logout">Выход</a>
          </li>             
        </ul>
      </div>
    </div>
  </nav>