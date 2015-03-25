<?php foreach ( $rows as $r ) { ?>
<div class="row">
	<div class="sec-sub-title text-center wow rubberBand animated col-md-1"
		data-wow-duration="1000ms">
		<?php echo $r->username;?>
	</div>
	<div class="sec-sub-title text-center wow rubberBand animated col-md-2"
		data-wow-duration="1000ms">
		<?php echo $r->avatar;?>
	</div>
	<div
		class="sec-sub-title text-center wow rubberBand animated col-md-9"
		data-wow-duration="1000ms">
		<?php echo $r->comment;?>
	</div>
</div>
<?php } ?>
