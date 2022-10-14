<div class="container">
  <div class="row">
    <div class="col">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>first_cont/index">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Генерация пароля</li>
            </ol>
          </nav>
          <form method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Начальный символ для создания пароля</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sym" required>
    <div id="emailHelp" class="form-text">Enter charachter</div>
  <button type="submit" class="btn btn-primary">Создать пароль</button> <br>
</form>
<?php    
if(isset($pass)){
  echo $pass.'<br>';

}
if(isset($fp)){
    echo $fp.'<br>';
}
   if (isset($content)) {
    echo($content);
   }
for($i = 0; $i<=2; $i++) {
echo('</div>');
}
?>

  