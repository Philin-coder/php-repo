<div class="container">
  <div class="row">
    <div class="col">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>first_cont/index">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Чтение textarea</li>
            </ol>
          </nav>
          <form method="POST" action="">
          <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Пример текстового поля</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="im"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Показать коммент</button>
  <button type="reset" class="btn btn-primary">Очистить</button>
</form>  
<?php
if (isset($naim)){
  echo($naim);
}
if(isset($fp)){
  echo($fp);
}
if (isset($ab)){
  echo($ab);
}
for($i = 0; $i<=2; $i++) {
echo('</div>');
}
?>

  