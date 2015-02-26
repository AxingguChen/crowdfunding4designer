<!DOCTYPE html>
<html lang="en">

<body>

<div>
	<h1>about page</h1>

	<div>
		<p>pagination.</p>
		<?php //echo $this->table->generate($records); ?>
		<?php echo $this->table->generate($records); ?>
		 
		<?php echo $this->pagination->create_links(); ?>
;
	</div>

</div>

</body>
</html>