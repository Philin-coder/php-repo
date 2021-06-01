<?php
$this->load->helper('url');
?>
<nav class="navbar navbar-expand navbar-light bg-faded nav-item" style="background-color: #e3f2fd;">
    <ul class="nav navbar-nav nav-tabs nav-item">
        <li class="nav-link active  nav-item">
            <a  role="tab"  data-toggle="tab" href="<?php echo base_url()?>Buhgalter/index"><i class="fa fa-money-bill fa-1x"></i>Ввод оплаты</a></li>

        <li class="nav-link active nav-item">
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle btn-expand btn-light  btn-item"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 30%; color: blue; background-color: #ffffff" onclick=" $('.dropdown-toggle').dropdown()">
                    Отчёты
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item"   href="<?php echo base_url()?>Buhgalter/actsverki">
                        <i class="fa fa-sticky-note  fa-1x"></i>Формирование акта сверки</a>
                    <a class="dropdown-item"  href="<?php echo base_url()?>Buhgalter/zavrab"><i class="fa fa-sticky-note  fa-1x"></i>
                        Сведения о выполненных работником работах</a>
                    <a class="dropdown-item"  href="<?php echo base_url()?>Buhgalter/zakldog"><i class="fa fa-sticky-note  fa-1x"></i>
                        Сведения о заключенных договорах</a>
                    <a class="dropdown-item"  href="<?php echo base_url()?>Buhgalter/viprab"><i class="fa fa-sticky-note  fa-1x"></i>
                        Сведения о выполненных нарядах за период</a>

                </div>
            </div>
        </li>
        <li class="nav-link active nav-item">
            <a  href="<?php echo base_url()?>Main/logout"><i class="fa fa-closed-captioning fa-1x"></i>Выйти </a>
        </li>

    </ul>
</nav>
