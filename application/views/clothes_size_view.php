<?php 
foreach ($rows as $row)
{
$options[] = array($row->clothes_size_id=>$row->clothes_size_name);

}


echo form_dropdown('projects_clothes_size_id', $options);
//print_r($rows);
?>
