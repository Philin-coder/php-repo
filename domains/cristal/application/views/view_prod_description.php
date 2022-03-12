<form  method="POST"  role="form" class="FormLine" action="/index.php/oc_product_description_cont/oc_product_description_get_report" >
<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Model</th>
            <th>Language_id</th>
            <th>Name</th>
            <th>Discripton</th>
			<th>tag</th>
			<th>meta_title</th>
			<th>meta_description</th>
			<th>meta_keywords</th>
		</tr>
					</thead>
				<tbody>
					
                <?php foreach  ($oc_product_description as $row):?>
				 
		
					<tr>
						<td><?=$row["model"];?></td>
						<td><?=$row["language_id"];?></td>
						<td><?=$row["name"];?></td>
                        <td><?=$row["description"];?></td>
						<td><?=$row["tag"];?></td>
						<td><?=$row["meta_title"];?></td>
						<td><?=$row["meta_description"];?></td>
						<td><?=$row["meta_keyword"];?></td>
					</tr>
					<?php endforeach;?>
					
				</tbody>
</table>
&nbsp;

<button type="submit">  Импорт в xml</button>
</form>
<?php echo("Таблица oc_product_discription"); ?>