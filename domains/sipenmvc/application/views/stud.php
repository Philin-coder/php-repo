<div class="container" >
    <div class="row">
        <div class="col">
          <form method="POST" role="form" class="form-inline">
            <div class="form-group mb-2 col-4">
                <label for="grup1">выбор группы</label>
            <select name="grup" id="grup1" class="form-control"><br><br>
                <?php
                
                $sql=$this->db->get('gruppa');
                foreach($sql->result_array()as$row):{
                    echo '<option value="'.$row['id_grupp'].'">'.$row['name_grup'] .'</option>';
                }
                endforeach;
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
            if(isset($stud)){
            foreach ($stud as $row):{
echo '<tr>
<td>'.$row['id_stud'].'</td>
<td>'.$row['fio'].'</td>
<td>'.$row['oсenka'].'</td>
<td>'.$row['data_p'].'</td>
<td>'.$row['date_o'].'</td>
<td>'.$row['nachislenno'].'</td>
<td>'.$row['udergano'].'</td>
</tr>';
        }
            endforeach;
        }
        echo('</table>');
        echo('</div');
        echo('</div');
            
?>

        
    