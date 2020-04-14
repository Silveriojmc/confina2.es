<?php
	
	// Inintialize URL to the variable 
	//$url = 'http://localhost/invitedby.php';     
	// if (isset($_GET['user'])) {
	//     echo $_GET['user'];
	//     header("Location: https://huntyiberica.typeform.com/to/FYoRS7?user=".$_GET['user']);
	// } else {
	//     header("Location: https://huntyiberica.typeform.com/to/FYoRS7");
	// }
?>
	<html> <head> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> <title>¿Quieres seguir conociendo gente durante el confinamiento? Haz nuestro test. Cada día recibirás el insta de una persona distinta! Sé responsable, #QUÉDATEENCASACONFINA2</title> <style type="text/css"> html{ margin: 0; height: 100%; overflow: hidden; } iframe{ position: absolute; left:0; right:0; bottom:0; top:0; border:0; } </style> </head> <body> <iframe id="typeform-full" width="100%" height="100%" frameborder="0" allow="camera; microphone; autoplay; encrypted-media;" src="https://huntyiberica.typeform.com/to/FYoRS7?user=<?php echo $_GET['user']; ?>"></iframe> <script type="text/javascript" src="https://embed.typeform.com/embed.js"></script> </body> </html>
<?php


?>

