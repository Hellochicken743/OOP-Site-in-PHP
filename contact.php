<?php
	
	include("config.php");
		
	$title = "Contact Lisa";
		
$content =<<<EOT
	
	<div>
	<h1>Contact Me</h1>
	<p>Email: <a href="mailto:lisa@freshwebcreations.com">lisa@freshwebcreations.com</a></p>
	<p>Telephone: 07815 323 750</p>
	</div>
	
EOT;


	$site->display($content, $title);

?>