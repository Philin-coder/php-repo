<!--<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Product_reward_id</th>
            <th>Product_id</th>
            <th>Customer_group_id</th>
            <th>Pointsr</th>
			
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_reward as $row):?>
					<tr>
					    <td><?=$row["product_reward_id"];?></td>	
                        <td><?=$row["product_id"];?></td>
						<td><?=$row["customer_group_id"];?></td>
                        <td><?=$row["points"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>-->
<?php echo("Таблица oc_product_reward"); ?>