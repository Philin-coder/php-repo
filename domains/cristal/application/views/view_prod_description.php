<!--<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Product_id</th>
            <th>Language_id</th>
            <th>Name</th>
            <th>Discripton</th>
			
		</tr>
					</thead>
				<tbody>
                <?php
					foreach  ($oc_product_discription as $row):?>
					<tr>
						<td><?=$row["product_id"];?></td>
						<td><?=$row["language_id"];?></td>
						<td><?=$row["name"];?></td>
                        <td><?=$row["discription"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>-->
<?php echo("Таблица oc_product_discription"); ?>