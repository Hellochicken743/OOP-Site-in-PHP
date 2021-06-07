<?php
	
	include("config.php");
		
	$title = "Lisa Codes OOP";
	
$content =<<<EOT
	
	<div>
	<h1>Lisa Codes Sometimes</h1>
	<p>Hello.  I like to code stuff. <br />  I am currently studying the MVC Framework Laravel. </p>
	
	<p>I've also been working on my own MVC, which will have an App built on it.</p>
	</div>
	
EOT;


	$site->display($content, $title);

?>