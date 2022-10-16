<div class="container">
  <div class="row">
    <div class="col">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>first_cont/index">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Калькулятор с проверкой полей</li>
            </ol>
          </nav>
          <form method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Раз число</label>
    <input type="text" class="form-control input-number" id="exampleInputEmail1" aria-describedby="emailHelp" name="num1" required>
    <div id="emailHelp" class="form-text">Enter first number</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Два число</label>
    <input type="text" class="form-control input-number" id="exampleInputEmail1" aria-describedby="emailHelp" name="num2" required>
    <div id="emailHelp" class="form-text">Enter second number</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Знак</label>
    <input type="text" class="form-control text_only" id="exampleInputEmail1" aria-describedby="emailHelp" name="sign" required>
    <div id="emailHelp" class="form-text">Enter the sign </div>
  </div>
  <button type="submit" class="btn btn-primary">Подсчитать</button>
</form>
<?php    
if(isset($res)){
  echo $res;

}
for($i = 0; $i<=2; $i++) {
    echo('</div>');
    }
?>