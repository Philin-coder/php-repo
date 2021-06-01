<nav class="navbar navbar-expand navbar-light bg-faded nav-item" style="background-color: #e3f2fd;">
    <ul class="nav navbar-nav nav-tabs nav-item">
        <li class="nav-link active  nav-item">
            <a  href="<?php echo base_url()?>Director/index"><i class="fa fa-pencil-alt fa-1x"></i>Подписание договора</a></li>
        <li class="nav-link active nav-item">
            <a   href="<?php echo base_url()?>Director/insertrab"><i class="fa fa-plus-circle fa-1x"></i>Добавление работника</a></li>

        <li class="nav-item active nav-item">
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle  "  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 60%; color: blue; background-color: #ffffff" onclick=" $('.dropdown-toggle').dropdown()">
                    Отчёты
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item"  href="<?php echo base_url()?>director/dogviprab"><i class="fa fa-sticky-note fa-1x"></i>
                        Сведения о выполненных работах по договору</a>
                    <a class="dropdown-item" href="<?php echo base_url()?>director/viprab"><i class="fa fa-sticky-note fa-1x"></i>
                         Сведения о выполненных нарядах за период </a>
                    <a class="dropdown-item"  href="<?php echo base_url()?>director/zakldog"><i class="fa fa-sticky-note fa-1x"></i>
                        Сведения о заключенных договорах </a>
                    <a class="dropdown-item"  href="<?php echo base_url()?>director/raitusl"><i class="fa fa-sticky-note fa-1x"></i>
                         Рейтинг услуг</a>
                </div>
            </div>
        </li>
        <li class="nav-link active nav-item">
            <a  href="<?php echo base_url()?>Main/logout"><i class="fa fa-closed-captioning fa-1x"></i>Выйти </a>
        </li>

    </ul>
</nav>
