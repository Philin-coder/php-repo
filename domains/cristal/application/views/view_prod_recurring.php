<!--<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Product_id</th>
            <th>Recurring_id</th>
            <th>Customer_group_id</th>	
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_recurring as $row):?>
					<tr>
                        <td><?=$row["product_id"];?></td>
						<td><?=$row["recurring_id"];?></td>
                        <td><?=$row["customer_group_id"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>-->
<?php echo("Таблица oc_product_recurring"); ?>