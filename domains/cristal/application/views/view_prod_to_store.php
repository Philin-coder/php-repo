<!--<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Product_id</th>
            <th>Store_id</th>
			
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_to_store as $row):?>
					<tr>	
                        <td><?=$row["product_id"];?></td>
						<td><?=$row["store_id"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>-->
<?php echo("Таблица oc_product_to_store"); ?>