<?php 
foreach ($rows as $row)
{
$options[] = array($row->id=>$row->name);

}


echo form_dropdown('clothes_size_id', $options);
//print_r($rows);
?>
