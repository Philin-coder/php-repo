<?php
include 'temp/head.php';
include 'temp/navbar.php';
include 'temp/header.php';
$mysqli=new mysqli("localhost", "root","1", "stip2");
$mysqli->set_charset("utf8");
?>
<div class="container" >
    <div class="row">
        <div class="col">
          <form method="POST" role="form" class="form-inline">
            <div class="form-group mb-2 col-4">
                <label for="grup1">выбор группы</label>
            <select name="grup" id="grup1" class="form-control"><br><br>
                <?php
                $sql=$mysqli->query("select * from gruppa");
                while ($row=mysqli_fetch_array($sql))
                {
                    echo '<option value="'.$row['id_grupp'].'">'.$row['name_grup'] .'</option>';
                }
                ?>
            </select>
            </div>
              <div class="form-group mb-2 col-4">
                  <input type="text" class="form-control" name="fio" placeholder="Введите имя студента"  required>
              </div>
              <div class="form-group mb-2 col-4" >
                  <input type="text" class="form-control" name="ball" placeholder="Введите среднюю  оценку" required>
              </div>
              <div class="form-group mb-2 col-4">
                  <label for="id_datep"> Дата приема</label>
                  <input type="date" class="form-control" name="data_p" id="id_datep" required>
              </div>
              <div class="form-group mb-2 col-4" >
                  <label for="id_dateo">Дата отчисления</label>
                  <input type="date" class="form-control" name="date_o" id="id_dateo" required>
              </div>
                <div class="form-group mb-2 col-4">
                    <input type="text" class="form-control" name="nachislenno"  placeholder="Начислено" required>
                </div>
              <div class="form-group mb-2 col-4">
                  <input type="text" class="form-control" name="udergano"  placeholder="удержанно" required>
              </div>
              <div  class="form-group mb-2 col-4">
                  <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
          </form>
        </div>
    </div>



<?php
if(!empty($_POST))
    {
        $grup=$_POST['grup'];
        $fio=$_POST['fio'];
        $ocenka=$_POST['ball'];
        $date_p=$_POST['data_p'];
        $date_o=$_POST['date_o'];
        $nachislenno=$_POST['nachislenno'];
        $udergano=$_POST['udergano'];
        $sql=$mysqli->query("insert into  stud(id_grup, fio, oсenka, data_p, date_o, nachislenno, udergano)values ('$grup','$fio','$ocenka','$date_p','$date_o','$nachislenno','$udergano')");
        $result=$mysqli->query($sql);

    }

?>
<div class="container">
    <div class="row">
        <table class="table">
            <tr>
                <th>id студента</th>
                <th>Фио</th>
                <th>Оценка</th>
                <th>дата поступления</th>
                <th>дата отчисления</th>
                <th>начисленно </th>
                <th>Удержано</th>
            </tr>
            <?php
            $result=$mysqli->query("select * from stud");
            while ($row=$result->fetch_array())
            {
echo '<tr>
<td>'.$row['id_stud'].'</td>
<td>'.$row['id_grupp'].'</td>
<td>'.$row['fio'].'</td>
<td>'.$row['ocenka'].'</td>
<td>'.$row['data_p'].'</td>
<td>'.$row['date_o'].'</td>
<td>'.$row['nachislenno'].'</td>
<td>'.$row['udergano'].'</td>
</tr>';
            }
            $result->free();
            $mysqli->close();
            ?>

        </table>
    </div>
</div>
<?php
include  'temp/footer.php';
?>