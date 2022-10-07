<br>
<br>
<div class="container">    
    <div class="row">
        <table class="table">
            <tr>
            <th>Фио</th>
            <th>Группа</th>
            <th>Дисциплина</th>
            <th>Оценка</th>
            <th>Средний бал</th>
            <th>Стипендия</th>
            </tr>
            <?php
            if (isset($rpv)){
            foreach($rpv as $row):{
             echo'<tr>
			<td>'.$row['fio'].'</td>
			<td>'.$row['name_grup'].'</td>
			<td>'.$row['naim_d'].'</td>
			<td>'.$row['ocenka'].'</td>
			<td>'.$row['sr'].'</td>;
            <td>'.$row['nachislenno'].'</td>;
            </tr>';
            }
        endforeach;
        }
        echo('</table>');
        echo('</div>');
        echo('</div>');
                  ?>
        