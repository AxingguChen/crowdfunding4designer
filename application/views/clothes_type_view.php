<?php 
foreach ($rows as $row)
{
$options[] = array($row->clothes_type_id=>$row->clothes_type_name);

}


if (isset($choose))
echo form_dropdown('projects_clothes_type_id', $options, $choose);
	else
echo form_dropdown('projects_clothes_type_id', $options);



?>
