<div class="container">
  <div class="row">
    <div class="col">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>first_cont/index">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Получение IP</li>
            </ol>
          </nav>
          <?php
          if(isset($ip)){
            echo($ip).'<br>';
          }
          if(isset($agent)){
            echo($agent).'<br>';
          }
          if(isset($fp)){
            echo($fp).'<br>';
          }
          for($i = 0; $i<=2; $i++) {
            echo('</div>');
            }
          ?>
          
  




  