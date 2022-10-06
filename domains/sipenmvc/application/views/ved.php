<br>
<br>
<div class="container" >
    <div class="row">
        <div class="table">
            tr>
            <th>Фио</th>
            <th>Группа</th>
            <th>Информатика</th>
            <th>Английский язык</th>
            <th>Математика</th>
            <th>Средний бал</th>
            <th>Стипендия</th>
            </tr>
            <?php
            $min=1500;
            $n='Стипендия не начисляется';
            if (isset($rpv)){
            foreach($rpv as $row):{
             echo'<tr>
			<td>'.$row['fio'].'</td>
			<td>'.$row['name_grup'].'</td>
			<td>'.$row['oc_inf'].'</td>
			<td>'.$row['oc_angl'].'</td>
			<td>'.$row['oc_mat'].'</td>
			<td>'.$row['sr_bal'].'</td>';
                if($row['sr_bal']>=3){
                    echo'<td>'.$min.'</td>';
                }
                if($row['sr_bal']<3){
                    echo'<td>'.$n.'</td>';
                }
                echo'</tr>';

            }
        endforeach;
        }

            
            ?>
        </div>
    </div>
</div>
