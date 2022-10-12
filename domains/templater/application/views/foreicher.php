<div class="container">
  <div class="row">
    <div class="col">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>first_cont/index">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Демонстрация foreach</li>
            </ol>
          </nav>
   
<?php
$x=array('html', 'css', 'php', 'js', 'jq');
foreach ($x as $i)
{
    echo ($i.'<br/>');
}
for($i = 0; $i<=2; $i++) {
    echo('</div>');
    }
?>
