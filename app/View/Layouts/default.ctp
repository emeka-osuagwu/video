<html>
	<?php echo $this->element('general/head'); ?>
	
	<body>
		
		<?php echo $this->element('general/nav'); ?>
		
		<div id="container">
			<div id="content">
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
		
		<?php echo $this->element('general/js'); ?>
	</body>

</html>
