<?php 
foreach ($rows as $r){
	echo '<h1><a href="http://localhost/index.php/projects/project?id='.$r->id.'">'.$r->title.'</a></h1>';
	echo '<p>'.$r->projectpic.'</p>';
	echo '<p>'.$r->price.'</p>';
	echo '<p>'.$r->round.'</p>';
	echo '<p>'.$r->current_sale.'</p>';
	echo '<p>'.$r->minimum_sale.'</p>';
}

?>