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
            <li><a href="<?php echo base_url();?>vakan_prof_cont/index">Вакансии по профессии</a></li>
            <li><a href="<?php echo base_url();?>report_work_cont/index">Список работодателей</a></li>
            <li><a href="<?php echo base_url();?>woekrs_list_cont/index">Список трудоустроенных</a></li>
            <li><a href="<?php echo base_url();?>prof_rate_cont/index">Рейтинг профессий</a></li>
            <li><a href="<?php echo base_url();?>woker_rate_cont/index">Рейтинг работодателей</a></li>
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