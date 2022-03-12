<form  method="POST"  role="form" class="FormLine" action="/index.php/oc_product_to_layout_cont/oc_product_to_layout_cont_get_report" >

<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Model</th>
            <th>Store_id</th>
            <th>Layout_id</th>	
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_to_layout as $row):?>
					<tr>
                        <td><?=$row["model"];?></td>
						<td><?=$row["store_id"];?></td>
                        <td><?=$row["layout_id"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>
&nbsp;
<button type="submit">  Импорт в xml</button>
					</form >
<?php echo("Таблица oc_product_to_layout"); ?>