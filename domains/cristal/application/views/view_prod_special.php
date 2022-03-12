<form  method="POST"  role="form" class="FormLine" action="/index.php/oc_product_special_cont/oc_product_special_cont_get_report" >

<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Product_special_id</th>
            <th>Model</th>
            <th>Customer_group_id</th>
            <th>Priority</th>
			<th>Price</th>
            <th>Date_start</th>
            <th>Date_end</th>
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_special as $row):?>
					<tr>
					    <td><?=$row["product_special_id"];?></td>	
                        <td><?=$row["model"];?></td>
						<td><?=$row["customer_group_id"];?></td>
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
</form>
<?php echo("Таблица oc_product_special"); ?>