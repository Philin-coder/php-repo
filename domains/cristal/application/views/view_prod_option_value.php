<!--<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Product_option_value_id</th>
            <th>Product_option_id</th>
            <th>Product_id</th>
            <th>Option_id</th>
            <th>Option_value_id</th>
			<th>Quantity</th>
            <th>Subtract</th>
            <th>Price/th>
            <th>Price_prefix</th>
            <th>Points/th>
            <th>Points_prefix</th>
            <th>Weight</th>
            <th>weight_prefix</th>
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_option_value as $row):?>
					<tr>
					    <td><?=$row["product_option_value_id"];?></td>	
                        <td><?=$row["product_option_id"];?></td>
                        <td><?=$row["product_id"];?></td>
						<td><?=$row["option_id"];?></td>
                        <td><?=$row["option_value_id"];?></td>
                        <td><?=$row["quantity"];?></td>	
						<td><?=$row["subtract"];?></td>
                        <td><?=$row["price"];?></td>
                        <td><?=$row["price_prefix"];?></td>	
                        <td><?=$row["points"];?></td>
						<td><?=$row["points_prefix"];?></td>
                        <td><?=$row["weight"];?></td>
                        <td><?=$row["weight_prefix"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>-->
<?php echo("Таблица oc_product_option_value"); ?>