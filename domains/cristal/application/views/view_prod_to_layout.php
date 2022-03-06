<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Model</th>
            <th>Store_id</th>
            <th>Layout_id</th>	
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_to_layout as $row):?>
					<tr>
                        <td><?=$row["model"];?></td>
						<td><?=$row["store_id"];?></td>
                        <td><?=$row["layout_id"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>
<?php echo("Таблица oc_product_to_layout"); ?>