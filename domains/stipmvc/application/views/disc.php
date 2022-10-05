
<div class="container">
    <div class="row">
<div class="col">


        <form method="POST" role="form" class="form-inline">
            <div class="form-group mb-2 col-4">
                <input type="text" class="form-control" name="naim_d" placeholder="введите название дисциплины" required>
            </div>
            <div class="form-group mb-2 col-4">
                <input type="text" class="form-control" name="ocenka" placeholder="введите название оценку" required>
            </div>
            <div class="form-group mb-2 col-4">
              <select name="asidst">  
                <?php
                $sql=$this->db->get('stud');
                foreach($sql->result_array() as $row):{
                echo '<option value="'.$row['id_stud'].'">'.$row['fio'].'</option>';    
                }
                endforeach;
            ?>
            </select> 
            </div>
            </div>
            <div class="form-group mb-2 col-4">
                <button type="submit" class="btn btn-primary">"Добавить "</button>
            </div>


        </form>
    </div>
</div>
</div>
<div class="container">
    <div class="row">
        <table class="table">
            <tr>
                <th>Номер </th>
                <th> Название</th>
                <th>Оценка</th>
                <th>Студент</th>
            </tr>
            <?php

if(isset($disc)){
    foreach($disc as $row):{
            echo '<tr>
            <td>'.$row['id_disc'].'</td>
            <td>'.$row['naim_d'].'</td>
            <td>'.$row['ocenka'].'</td>
            <td>'.$row['asidst'].'</td>
            </tr>';
            }
            endforeach;
            }
            echo('</table>');
            echo('</div');
            echo('</div');
    
        
?>

