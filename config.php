<?php


// use auto load function to bring in the classes as we need them.

	spl_autoload_register(function ($class){
		include "classes/".$class.".php";
	});

	$site = new site;
	
	$site->addHeader("header.php");
	
	$site->addFooter("footer.php");
	
	$page = new page;
	
	
?>