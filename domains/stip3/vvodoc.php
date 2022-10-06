<?php
include  'temp/head.php';
include 'temp/navbar.php';
include 'temp/header.php';
$mysqli=new mysqli("localhost","root","","stip2");
$mysqli->set_charset("utf8");
?>
<div class="container">
    <div class="row">
        <div class="col">

<form method="POST" role="form" class="form-inline">
    <div class="form-group mb-2 col-4">
<label for="d">по дисциплине  </label>
        <select name="sel_d" id="d" class="form-control"><br><br>
<?php
$sql=$mysqli->query("select * from disc");
while ($row=mysqli_fetch_array($sql))
{
    echo  '<option value="'.$row['id_disc'].'">'.$row['naim_d'].' </option>';
}
?>
        </select>
    </div>
    <div class="form-group mb-2 col-4">
        <label for="gr">выбор группы</label>
        <select name="grup" id="gr" class="form-control"><br><br>
            <?php
            $sql=$mysqli->query("select * from gruppa");
            while ($row=mysqli_fetch_array($sql))
            {
                echo  '<option value="'.$row['id_grupp'].'">'.$row['name_grup'].' </option>';
            }
            ?>
        </select>
    </div>
    <div class="form-group mb-2 col-4">
        <label for="st"> выбор студента</label>
        <select id="st" class="form-control" name="st"><br><br>
            <?php
            $sql=$mysqli->query("select * from stud");
            while ($row=mysqli_fetch_array($sql))
            {
                echo  '<option value="'.$row['id_stud'].'">'.$row['fio'].' </option>';
            }

            ?>
        </select>
        <div class="form-group  mb-2 col-4">
            <input type="text" class="form-control" name="ocen_d" placeholder="введие оценку"  required>
        </div>
        <div class="form-group mb-2 col-4">
            <button type="submit" class="btn btn-primary"> поставить </button>
        </div>
</form>
        </div>
    </div>
</div>
<?php
if(!empty($_POST))
{
    $sel_d=$_POST['sel_d'];
    $ocen_d=$_POST['ocen_d'];
    $st=$_POST['st'];
    $sql=$mysqli->query("insert into disc(naim_d, ocenka, id_stud) values('$sel_d','$ocen_d','$st') ");
    $result=$mysqli->query($sql);
}
?>
<div class="container">
    <div class="row">
    <table class="table">
        <tr>
        <th>
            Фио студента
        </th>
        <th>
            id группы
        </th>
        <th>
            дисциплина
        </th>
        <th>
            оценка
        </th>
            <th>
                Группа(название)
            </th>
        </tr>
        <?php
$result=$mysqli->query("select stud.fio, stud.id_grup,d.naim_d,d.ocenka,g.name_grup from stud join gruppa g on stud.id_grup = g.id_grupp join disc d on stud.id_stud = d.id_stud");
while ($row=$result->fetch_array())
{
    echo '<tr>
<td>'.$row['fio'].'</td>
<td>'.$row['id_grup'].'</td>
<td>'.$row['naim_d'].'</td>
<td>'.$row['ocenka'].'</td>
<td>'.$row['name_grup'].'</td>

  </tr>';
}
$result->free();
$mysqli->close();
?>

    </table>
    </div>
</div>
<?php
include 'temp\footer.php';
?>

