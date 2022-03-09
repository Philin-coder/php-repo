<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Product_reward_id</th>
            <th>Model</th>
            <th>Customer_group_id</th>
            <th>Pointsr</th>
			
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_reward as $row):?>
					<tr>
					    <td><?=$row["product_reward_id"];?></td>	
                        <td><?=$row["model"];?></td>
						<td><?=$row["customer_group_id"];?></td>
                        <td><?=$row["points"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>
&nbsp;
<button type="submit">  Импорт в xml</button>
<?php echo("Таблица oc_product_reward"); ?>