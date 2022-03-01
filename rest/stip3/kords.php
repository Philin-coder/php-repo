<?php
include 'temp/head.php';
include 'temp/navbar.php';
include 'temp/header.php';
$mysqli=new  mysqli("localhost","root", "1","stip2");
$mysqli->set_charset("utf8");
?>
<div class="container">
    <div class="row">
        <div class="col">
            <form method="post" role="form" class="form-inline">
<div class="form-group mb-2 col-4">
    <label for="grupsel">Выбор группы</label>
    <select id="grupsel" name="grupsel" class="form-control"><br><br>
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
                    <label for="specsel">Выбор  специальности </label>
                    <select id="specsel" name="specsel" class="form-control"><br><br>
                        <?php
                        $sql=$mysqli->query("select spec from gruppa");
                        while ($row=mysqli_fetch_array($sql))
                        {
                            echo  '<option value="'.$row['id_grupp'].'">'.$row['spec'].' </option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group  mb-2 col-4">
                    <input type="text" class="form-control" name="upd_spec" placeholder="введие специальность"  required>
                </div>
                <div class="form-group mb-2 col-4">
                <button type="submit" class="btn btn-primary"> изменть </button>
        </div>

            </form>
        </div>
        </div>
</div>
<?php
if (!empty($_POST))
{
    $grupsel=$_POST['grupsel'];
    $specsel=$_POST['specsel'];
    $upd_spec=$_POST['upd_spec'];
    $sql=$mysqli->query("UPDATE gruppa SET spec='".'$upd_spec'."' WHERE spec = '$specsel'");

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