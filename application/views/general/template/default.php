<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Pustaka</title>
    
    <?php echo isset($css) ? $css : ''; ?>
    <?php echo isset($js) ? $js : ''; ?>
</head>

<body>

	<div class="navbar">
		<div class="navbar-inner">
		
			<?php echo html::anchor(URL::base(), 'Pustaka', array('class' => 'brand')); ?>
		
		</div>
	</div>
	
</body>
</html>