<!doctype html>
<html>
<head>
    <title><?php echo $title; ?></title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link type="text/css" rel="stylesheet" href="css/styles.css" />
   
</head>
<body>

	<div class="topbanner">
	LISA WARD - OOP TEST SITE
	</div>

	<div class="menu">
	
<?php 

$menu =<<<EOT
	
	<a href="index.php">Home |</a>
	<a href="about.php">About |</a>
	<a href="contact.php">Contact</a>
	
EOT;
		

	echo $menu;
?>
		
	</div>