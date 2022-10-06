<div class="container">
    <div class="row">
        <div class="col">

<form method="POST" role="form" class="form-inline">
    <div class="form-group mb-2 col-4">
<label for="d">по дисциплине  </label>
        <select name="sel_d" id="d" class="form-control"><br><br>
<?php

$sql=$this->db->get("disc");
foreach ($sql->result_array() as $row):{
    echo  '<option value="'.$row['id_disc'].'">'.$row['naim_d'].' </option>';
}
endforeach;
?>
        </select>
    </div>
    <div class="form-group mb-2 col-4">
        <label for="gr">выбор группы</label>
        <select name="grup" id="gr" class="form-control"><br><br>
            <?php
            
            $sql=$this->db->get("gruppa");
            foreach ($sql->result_array() as $row):{
                echo  '<option value="'.$row['id_grupp'].'">'.$row['name_grup'].' </option>';
            }
            endforeach;
            ?>
        </select>
    </div>
    <div class="form-group mb-2 col-4">
        <label for="st"> выбор студента</label>
        <select id="st" class="form-control" name="st"><br><br>
            <?php
            
            $sql=$this->db->get("stud");
            foreach($sql->result_array() as $row):{
                echo  '<option value="'.$row['id_stud'].'">'.$row['fio'].' </option>';
            }
        endforeach;

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
/*
if(!empty($_POST))
{
    $sel_d=$_POST['sel_d'];
    $ocen_d=$_POST['ocen_d'];
    $st=$_POST['st'];
    $sql=$mysqli->query("insert into disc(naim_d, ocenka, id_stud) values('$sel_d','$ocen_d','$st') ");
    $result=$mysqli->query($sql);
}
*/
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
        if (isset($disc)){    
foreach($disc as $row):{
    echo '<tr>
<td>'.$row['fio'].'</td>
<td>'.$row['id_grup'].'</td>
<td>'.$row['naim_d'].'</td>
<td>'.$row['ocenka'].'</td>
<td>'.$row['name_grup'].'</td>

  </tr>';
}
endforeach;
}
echo('</table>');
echo('</div>');
echo('</div>');
?>

    
