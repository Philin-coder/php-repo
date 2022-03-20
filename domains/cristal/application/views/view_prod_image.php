<form  method="POST"  role="form" class="FormLine" action="/index.php/oc_product_image_cont/oc_product_image_cont_get_report" >
<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Product_image_id</th>
            <th>Model</th>
            <th>Image</th>
            <th>Sort_order</th>
			
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_image as $row):?>
					<tr>
					    <td><?=$row["product_image_id"];?></td>	
                        <td><?=$row["model"];?></td>
						<td><?=$row["image"];?></td>
                        <td><?=$row["sort_order"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>
&nbsp;
<button type="submit">  Импорт в xml</button>
</form>
<form  method="POST"  role="form" class="FormLine" action="/index.php/oc_product_image_cont/view_xml">
<button type="submit"> читать   xml</button>
</form>
<?php echo("Таблица oc_product_image"); ?>