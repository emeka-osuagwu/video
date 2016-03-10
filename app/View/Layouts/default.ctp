<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title></title>
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
	<body>
		<div id="container">
		<a href="/cakephp/users/register">register</a>
		<a href="/cakephp/file/upload">upload</a>
		

			<div id="content">
				<?php echo $this->fetch('content'); ?>
			</div>

		</div>
	</body>
</html>
