<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$patient = $db->escape_string($_POST["patient_id"]);
		
		// Prepare query and execute
		$query = "insert into client (name, patient_id) values ('$name','$patient_id')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>