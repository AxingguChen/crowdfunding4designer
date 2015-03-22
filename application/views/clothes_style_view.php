<?php 
foreach ($rows as $row)
{
$options[] = array($row->id=>$row->name);

}


echo form_dropdown('clothes_style_id', $options);

//print_r($rows);
?>
