<form  method="POST"  role="form" class="FormLine" action="<?php echo base_url();?>oc_product_theirsystem_properties_cont/oc_product_theirsystem_properties_cont_get_report" >
<table id="example" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
            <th>Model</th>
            <th>Language_id</th>
            <th>Properties</th>
			
		</tr>
	</thead>
				<tbody>
                <?php
					foreach  ($oc_product_theirsystem_properties as $row):?>
					<tr>
					    
                        <td><?=$row["model"];?></td>
						<td><?=$row["language_id"];?></td>
                        <td><?=$row["properties"];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
</table>
&nbsp;
<button type="submit">  Импорт в xml</button>

</form >
<form  method="POST"  role="form" class="FormLine" action="<?php echo base_url();?>oc_product_theirsystem_properties_cont/view_xml">
<button type="submit"> читать   xml</button>
</form>
<?php echo("Таблица oc_product_theirsystem_properties"); ?>