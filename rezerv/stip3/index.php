<?php
include 'temp/head.php';
include 'temp/navbar.php';
include 'temp/header.php';
$mysqli=new mysqli ("localhost", "root", "","stip2");
$mysqli->set_charset("utf8");
?>
<div class="container">
    <div class="row">
<div class="col">


        <form method="POST" role="form" class="form-inline">
            <div class="form-group mb-2 col-4">
                <input type="text" class="form-control" name="name_grup" placeholder="введите название группы" required>
            </div>
            <div class="form-group mb-2 col-4">
                <input type="text" class="form-control" name="spec" placeholder="введите название специальности" required>
            </div>
            <div class="form-group mb-2 col-4">
                <button type="submit" class="btn btn-primary">"Добавить "</button>
            </div>


        </form>
    </div>
</div>
</div>
<?php
if (!empty($_POST))
{
    $name_grup=$_POST['name_grup'];
    $spec=$_POST['spec'];
    $sql=$mysqli->query("insert into gruppa(name_grup, spec) values ('$name_grup','$spec')");
    $result=$mysqli->query($sql);
}
?>
<div class="container">
    <div class="row">
        <table class="table">
            <tr>
                <th>Номер </th>
                <th> Название</th>
                <th>Специальнотсь</th>
            </tr>
            <?php
$result=$mysqli->query("select * from gruppa");
while ($row=$result->fetch_array())
{
echo '<tr>
<td>'.$row['id_grupp'].'</td>
<td>'.$row['name_grup'].'</td>
<td>'.$row['spec'].'</td>
</tr>';
}
    $result->free();
    $mysqli->close();

            ?>
        </table>
    </div>
</div>
<?php
include 'temp/footer.php';
?>

