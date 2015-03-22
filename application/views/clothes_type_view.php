<?php 
foreach ($rows as $row)
{
$options[] = array($row->id=>$row->name);

}


echo form_dropdown('clothes_type_id', $options);



?>
