<form  method="POST"  role="form" class="FormLine" action="/index.php/oc_product_cont/oc_product_cont_get_report" >
<!--<form  method="POST"  role="form" class="FormLine" action="/index.php/cont_crystal/oc_product_cont_get_report"> -->
<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Model</th>
			<th>Sku</th>
			<th>Upc</th>
			<th>Ean</th>
			<th>Jan</th>
			<th>Isbn</th>
			<th>Mpn</th>
			<th>Location</th>
			<th>Quantity</th>
			<th>Stock_status_id</th>
			<th>Image</th>
			<th>Manufacturer_id</th>
			<th>Shipping</th>
			<th>Price</th>
			<th>Points</th>
			<th>Tax_class_id</th>
			<th>Date_available</th>
			<th>Weight</th>
			<th>Weight_class_id</th>
			<th>Lenght</th>
			<th>Width</th>
			<th>Height</th>
			<th>Length_class_id</th>
			<th>Subtract</th>
			<th>Minimum</th>
			<th>Sort_order</th>
			<th>Status</th>
			<th>Viewed</th>
			<th>Date_added</th>
			<th>Date_modified</th>
		</tr>
	</thead>
		<tbody>
			<?php 
			
			foreach  ($oc_product as $row):?>
				<tr>
						<td><?=$row["model"];?></td>
						<td><?=$row["sku"];?></td>
						<td><?=$row["upc"];?></td>
						<td><?=$row["ean"];?></td>
						<td><?=$row["jan"];?></td>
						<td><?=$row["isbn"];?></td>
						<td><?=$row["mpn"];?></td>
						<td><?=$row["location"];?></td>
						<td><?=$row["quantity"];?></td>
						<td><?=$row["stock_status_id"];?></td>
						<td><?=$row["image"];?></td>
						<td><?=$row["manufacturer_id"];?></td>
						<td><?=$row["shipping"];?></td>
						<td><?=$row["price"];?></td>
						<td><?=$row["points"];?></td>
						<td><?=$row["tax_class_id"];?></td>
						<td><?=$row["date_available"];?></td>
						<td><?=$row["weight"];?></td>
						<td><?=$row["weight_class_id"];?></td>
						<td><?=$row["length"];?></td>
						<td><?=$row["width"];?></td>
						<td><?=$row["height"];?></td>
						<td><?=$row["length_class_id"];?></td>
						<td><?=$row["subtract"];?></td>
						<td><?=$row["minimum"];?></td>
						<td><?=$row["sort_order"];?></td>
						<td><?=$row["status"];?></td>
						<td><?=$row["viewed"];?></td>
						<td><?=$row["date_added"];?></td>
						<td><?=$row["date_modified"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>
&nbsp;
<button type="submit">  Импорт в xml</button>

</form >
<form  method="POST"  role="form" class="FormLine" action="/index.php/cont_crystal/view_xml">
<button type="submit"> читать   xml</button>
</form>