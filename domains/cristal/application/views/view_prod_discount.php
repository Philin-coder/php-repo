<form  method="POST"  role="form" class="FormLine" action="" >

<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			
            <th>Product_discount_id</th>
            <th>Model</th>
            <th>Customer_group_id</th>
            <th>Quantity</th>
            <th>Priority</th>
            <th>Price</th>
            <th>Date_start</th>
            <th>Date_end</th>
			
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_discount as $row):?>
					<tr>
						<td><?=$row["product_discount_id"];?></td>
						<td><?=$row["model"];?></td>
						<td><?=$row["customer_group_id"];?></td>
                        <td><?=$row["quantity"];?></td>
                        <td><?=$row["priority"];?></td>
						<td><?=$row["price"];?></td>
						<td><?=$row["date_start"];?></td>
                        <td><?=$row["date_end"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>
&nbsp;
<button type="submit">  Импорт в xml</button>
<br>
					
					</form>
<?php echo("Таблица oc_product_discount"); ?>
