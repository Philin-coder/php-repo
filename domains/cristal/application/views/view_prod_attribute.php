<form  method="POST"  role="form" class="FormLine" action="index.php/oc_product_attribute_cont/oc_product_description_model_get_xml" >

<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Model</th>
			<th>Attribute_id</th>
			<th>Language_id</th>
			<th>Text</th>
			
		</tr>
					</thead>
				<tbody>
                <?php
					foreach  ($oc_product_attribute as $row):?>
					<tr>
						<td><?=$row["model"];?></td>
						<td><?=$row["attribute_id"];?></td>
						<td><?=$row["language_id"];?></td>
						<td><?=$row["text"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>
&nbsp;
<button type="submit">  Импорт в xml</button>
</form>
<?php echo("oc_product_attribute"); ?>