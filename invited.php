<?php
	
	// Inintialize URL to the variable 
	//$url = 'http://localhost/invitedby.php';     
	if (isset($_GET['user'])) {
	    echo $_GET['user'];
	    header("Location: https://huntyiberica.typeform.com/to/FYoRS7?user=".$_GET['user']);
	} else {
	    header("Location: https://huntyiberica.typeform.com/to/FYoRS7");
	}

?>

