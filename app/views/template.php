<!doctype html>
<html>
	<head>
		<title>Sistemas mjailton</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . "assets/"?>css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . "assets/"?>css/auxiliar.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . "assets/"?>css/grade.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . "assets/"?>css/m-style.css">
		 
		<script type="text/javascript" src="<?php echo URL_BASE . "assets/"?>js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="<?php echo URL_BASE . "assets/"?>js/js.js"></script>
		
	</head>
<body>

<div class="base-topo">
	<?php include "menu_mobile.php" ?>		
</div>

<div id="menu">
	<?php include "menu.php" ?>			
</div>

		<?php $this->load($view, $viewData); ?>	
		
</body>
</html>