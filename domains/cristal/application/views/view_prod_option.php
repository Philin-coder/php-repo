<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Product_option_id</th>
            <th>Model</th>
            <th>Option_id</th>
            <th>Value</th>
            <th>Required</th>	
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_option as $row):?>
					<tr>
					    <td><?=$row["product_option_id"];?></td>	
                        <td><?=$row["model"];?></td>
						<td><?=$row["option_id"];?></td>
                        <td><?=$row["Value"];?></td>
                        <td><?=$row["required"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>
&nbsp;
<button type="submit">  Импорт в xml</button>
<?php echo("Таблица oc_product_option"); ?>