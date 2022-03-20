<form  method="POST"  role="form" class="FormLine" action="/index.php/oc_product_to_category_cont/oc_product_to_category_cont_get_report" >

<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Model</th>
            <th>Category_id</th>
			
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_to_category as $row):?>
					<tr>
                        <td><?=$row["model"];?></td>
						<td><?=$row["category_id"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>
&nbsp;
<button type="submit">  Импорт в xml</button>

</form>
<form  method="POST"  role="form" class="FormLine" action="/index.php/oc_product_to_category_cont/view_xml">
<button type="submit"> читать   xml</button>
</form>
<?php echo("Таблица oc_product_to_category"); ?>