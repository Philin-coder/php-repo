<form  method="POST"  role="form" class="FormLine" action="/index.php/oc_product_recurring_cont/oc_product_recurring_cont_get_report" >
<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Model</th>
            <th>Recurring_id</th>
            <th>Customer_group_id</th>	
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_recurring as $row):?>
					<tr>
                        <td><?=$row["model"];?></td>
						<td><?=$row["recurring_id"];?></td>
                        <td><?=$row["customer_group_id"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>
&nbsp;
<button type="submit">  Импорт в xml</button>
		
</form>

<?php echo("Таблица oc_product_recurring"); ?>
					