<div class="container">
  <div class="row">
    <div class="col">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>first_cont/index">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Сбор информации с сайта</li>
            </ol>
          </nav>
          <form method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ввод ссылки</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="link" required>
    <div id="emailHelp" class="form-text">Enter link</div>
  </div>
  <button type="submit" class="btn btn-primary">Забрать</button>
</form>
<?php    
if(isset($fp)){
  echo $fp;


}
if(isset($copy)){
    echo $copy;
}
for($i = 0; $i<=2; $i++) {
echo('</div>');
}
?>

  