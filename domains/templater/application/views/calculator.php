<div class="container">
  <div class="row">
    <div class="col">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>first_cont/index">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Калькулятор</li>
            </ol>
          </nav>
          <form method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Раз число</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="num1" required>
    <div id="emailHelp" class="form-text">Enter first number</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Два число</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="num2" required>
    <div id="emailHelp" class="form-text">Enter second number</div>
  </div>
  <div class="mb-3">
  <select class="form-select" aria-label="Default select example" name="op" required>
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
</select>
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

  