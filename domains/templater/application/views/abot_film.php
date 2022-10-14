<div class="container">
  <div class="row">
    <div class="col">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>first_cont/index">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Чтение textarea</li>
            </ol>
          </nav>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Ввод информации</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea name="area">
</div>
<button type="button" class="btn btn-primary">Считать</button>
<?php
for($i = 0; $i<=2; $i++) {
echo('</div>');
}
?>

  