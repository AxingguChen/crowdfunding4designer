<?php foreach ( $rows as $r ) { ?>
<div class="row">
<a >
		<div class="wow rubberBand animated col-md-2"
		data-wow-duration="1000ms">
			 			<?php echo $r->avatar;?>
			 			</div>
		<div class=" wow rubberBand animated col-md-7" data-wow-duration="1000ms">
			 			<span class="name"><?php echo $r->username;?> : "<?php echo $r->comment;?>"</span>
			 			</div>
		
		<div class=" wow rubberBand animated col-md-2"
		data-wow-duration="1000ms">	 			
			 			<time><?php echo $r->comment_date;?></time>
			 			</div>
</a>
</div>

<?php } ?>

				<a href="#" class="active">more</a>
	