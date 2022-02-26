<!--<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Product_image_id</th>
            <th>Product_id</th>
            <th>Image</th>
            <th>Sort_order</th>
			
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_image as $row):?>
					<tr>
					    <td><?=$row["product_image_id"];?></td>	
                        <td><?=$row["product_id"];?></td>
						<td><?=$row["image"];?></td>
                        <td><?=$row["sort_order"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>-->
<?php echo("Таблица oc_product_image"); ?>