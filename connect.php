<?php
	$conn = new mysqli('localhost', 'root', '', 'fp') or die(mysqli_error());
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
	