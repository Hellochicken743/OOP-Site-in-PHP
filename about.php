<?php
	
	include("config.php");
		
	$title = "About Lisa";
		
$content =<<<EOT
	
	<div>
	<h1>About Lisa Ward</h1>
	<p>After completing my diploma at Birkbeck University, I started my freelance web design business.  I continued working freelance for 15 years, learning as much as I could everyday! </p>
	</div>
	
EOT;


	$site->display($content, $title);

?>