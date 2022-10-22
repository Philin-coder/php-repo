  <header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <a class="navbar-brand" href="<?php echo base_url();?>main_con/index"> <img class="img-responsive" src="<?php echo base_url();?>public/images/logo.png" alt=""></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url();?>director_cont/index">Главная</a></li>
            <li><a href="<?php echo base_url();?>list_cont/index">Список клиентов (по профессии)</a></li>
            <li><a href="vak_po_pr.php">Вакансии по профессии</a></li>
            <li><a href="otchet_r.php">Список работодателей</a></li>
            <li><a href="otchet_s.php">Список трудоустроенных</a></li>
            <li><a href="reiting_p.php">Рейтинг профессий</a></li>
            <li><a href="reiting_r.php">Рейтинг работодателей</a></li>
            <li><a href="sv.php">Сводный отчет</a></li>
            <li><a href="<?php echo base_url();?>avt_cont/logout">Выход</a></li>
          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->