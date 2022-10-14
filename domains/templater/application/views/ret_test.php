<div class="container">
  <div class="row">
    <div class="col">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>first_cont/index">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Возврат значения из поля</li>
            </ol>
          </nav>
          <form method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ваше имя </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="im" required>
    <div id="emailHelp" class="form-text">Enter  your first name</div>
  </div>
  <p><b>Каким браузером Вы  пользуетесь? </b> </p>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="explorer" checked>
  <label class="form-check-label" for="exampleRadios1">
    Explorer
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="chrome">
  <label class="form-check-label" for="exampleRadios2">
    Chrome
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="firefox" checked>
  <label class="form-check-label" for="exampleRadios3">
  firefox
  </label>
</div>


<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Пример текстового поля</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Показать имя</button>
  <button type="reset" class="btn btn-primary">Очистить</button>
</form>
  
<?php
if (isset($naim)){
  echo($naim);
}
for($i = 0; $i<=2; $i++) {
echo('</div>');
}
?>

  