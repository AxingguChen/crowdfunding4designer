<?php 
foreach ($rows as $row)
{
$options[] = array($row->clothes_style_id=>$row->clothes_style_name);

}


if (isset($choose))
echo form_dropdown('projects_clothes_style_id', $options, $choose);
	else
echo form_dropdown('projects_clothes_style_id', $options);

//print_r($rows);
?>
