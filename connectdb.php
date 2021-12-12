<?php

	$conn = mysqli_connect('localhost','root','','statebankofindia');

	if(!$conn){
		die("Could not connect due to the error : ".mysqli_connect_error());
	}

?>