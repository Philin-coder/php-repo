<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Model</th>
            <th>Related_id</th>
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_related as $row):?>
					<tr>
					    <td><?=$row["model"];?></td>	
                        <td><?=$row["related_id"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>
&nbsp;
<button type="submit">  Импорт в xml</button>
<?php echo("Таблица oc_product_related"); ?>