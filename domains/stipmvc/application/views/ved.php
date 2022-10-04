<?php
include 'temp\head.php';
include 'temp\navbar.php';
include 'temp\header.php';
$mysqli=new mysqli('locahost', "root", "","stip2");
$mysqli->set_charset("utf8");
?>
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
            $result=$mysqli->query("select fio,name_grup,oc_mat,oc_inf,oc_angl,(oc_mat+oc_inf+oc_angl)/3 as sr_bal from student,gruppa,ocenka where student.id_grup=gruppa.id_grup and ocenka.id_stud=student.id_stud");
            while($row = $result->fetch_array()){

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

            $result->free();
            $mysqli->close();
            ?>
        </div>
    </div>
</div>
<?php
include 'temp/footer.php';
?>