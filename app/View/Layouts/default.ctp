<html>
	<?php echo $this->element('general/head'); ?>
	<?php echo $this->element('general/js'); ?>
	
	<body>
		<?php echo $this->element('general/nav'); ?>
		
		<?php echo $this->fetch('content'); ?>
	</body>

</html>
