
<div class="container">
    <div class="row">
<div class="col">


        <form method="POST" role="form" class="form-inline">
            <div class="form-group mb-2 col-4">
                <input type="text" class="form-control" name="name_grup" placeholder="введите название группы" required>
            </div>
            <div class="form-group mb-2 col-4">
                <input type="text" class="form-control" name="spec" placeholder="введите название специальности" required>
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
                <th>Специальнотсь</th>
            </tr>
            <?php
            if(isset($gruppa)){ 
 foreach($gruppa as $row):{
echo '<tr>
<td>'.$row['id_grupp'].'</td>
<td>'.$row['name_grup'].'</td>
<td>'.$row['spec'].'</td>
</tr>';
}
endforeach;
}
echo('</table>');
echo('</div');
echo('</div');
?>
        
    


