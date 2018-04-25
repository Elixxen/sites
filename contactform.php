<?php

if(isset($_POST['Submit'])) {
    
	$name = $_POST['name'];
    
	$course = $_POST['course'];
    
	$message = $_POST['message'];
    
    
    

	$mailTo = "elixander.chamoun@alingsas.se";
    
	$headers = "From: Site Form Submission";
    
    

	mail($mailTo, $course, $message, $headers);
    
	header("Location: index.php?mailsend");

}

?>