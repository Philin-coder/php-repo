<div class="container">
    <div class="row">
        <div class="col">
            <form method="post" role="form" class="form-inline" action="">
<div class="form-group mb-2 col-4">
    <label for="grupsel">Выбор группы</label>
    <select id="grupsel" name="grupsel" class="form-control"><br><br>
        <?php   
        $sql=$this->db->get('gruppa');
        foreach ($sql->result_array() as $row):{
            echo  '<option value="'.$row['id_grupp'].'">'.$row['name_grup'].' </option>';
        }
    endforeach;
    ?>
    </select>
</div>

                <div class="form-group mb-2 col-4">
                    <label for="specsel">Выбор  специальности </label>
                    <select id="specsel" name="specsel" class="form-control"><br><br>
                        <?php
                        $sql=$this->db->get('gruppa');
                        foreach($sql->result_array() as $row):{
                            echo  '<option value="'.$row['id_grupp'].'">'.$row['spec'].' </option>';
                        }
                        endforeach;
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
/*
if (!empty($_POST))
{
    $grupsel=$_POST['grupsel'];
    $specsel=$_POST['specsel'];
    $upd_spec=$_POST['upd_spec'];
    $sql=$mysqli->query("UPDATE gruppa SET spec='".'$upd_spec'."' WHERE spec = '$specsel'");

    $result=$mysqli->query($sql);
*/
//}
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
                if(isset($gruppa)){   
                foreach ($gruppa as $row):{
                    echo '<tr>
<td>'.$row['id_grupp'].'</td>
<td>'.$row['name_grup'].'</td>
<td>'.$row['spec'].'</td>
</tr>';
                }
            endforeach;
            }
                echo('</table>');
                echo('</div>');
                echo('</div>');
                ?>
            
        