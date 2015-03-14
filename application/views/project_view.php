<?php 
foreach ($rows as $r){?>

	<h1>title:<?php echo $r->title;?></h1>
	<p>users_id:<?php echo $r->users_id;?></p>
	<p>projectpic:<?php echo $r->projectpic;?></p>
	<p>deadline:<?php echo $r->deadline;?></p>
	<p>description:<?php echo $r->description;?></p>	
	<p>madeof:<?php echo $r->madeof;?></p>	
	<p>howtowash:<?php echo $r->howtowash;?></p>	
	<p>whyme:<?php echo $r->whyme;?></p>	
	<p>email:<?php echo $r->email;?></p>	
	<p>price:<?php echo $r->price;?></p>	
	<p>round:<?php echo $r->round;?></p>	
	<p>current_sale:<?php echo $r->current_sale;?></p>	
	<p>minimum_sale:<?php echo $r->minimum_sale;?></p>	

<?php 
}
?>
