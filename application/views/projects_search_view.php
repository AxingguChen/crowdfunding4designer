<?php // echo print_r($rows); ?>
<?php foreach ($rows as $r){ 	?>

<figure  class="work-item">
	<img
		src="<?php echo base_url();?>assets/img/project/<?php echo $r->projects_id;?>-1.jpg"
		alt="">
	<figcaption class="overlay">
		<a class="fancybox" rel="works"
			href="/index.php/projects/project/<?php echo $r->projects_id?>"><i
			class="fa fa-eye fa-lg"></i></a>
		<h4><?php echo $r->title;?></h4>
		<p>round:$<?php echo $r->price;?></p>
		<p>$<?php echo $r->price;?>,<?php echo $r->current_sale;?>/<?php echo $r->minimum_sale;?></p>
	</figcaption>
</figure>

<?php	}		?>


<div class="sec-sub-title text-center">
	<p>button (ajax) loading more</p>
</div>