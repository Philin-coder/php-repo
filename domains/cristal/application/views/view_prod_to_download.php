<form  method="POST"  role="form" class="FormLine" action="" >

<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Model</th>
            <th>Download_id</th>
			
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_to_download as $row):?>
					<tr>
                        <td><?=$row["model"];?></td>
						<td><?=$row["download_id"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>
&nbsp;
<button type="submit">  Импорт в xml</button>	
</form>
<?php echo("Таблица oc_product_to_download"); ?>