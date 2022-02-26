<!--<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Product_id</th>
			<th>Attribute_id</th>
			<th>Language_id</th>
			<th>Text</th>
			
		</tr>
					</thead>
				<tbody>
                <?php
					foreach  ($oc_product_attribute as $row):?>
					<tr>
						<td><?=$row["product_id"];?></td>
						<td><?=$row["attribute_id"];?></td>
						<td><?=$row["language_id"];?></td>
						<td><?=$row["text"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>-->
<?php echo("oc_product_attribute"); ?>