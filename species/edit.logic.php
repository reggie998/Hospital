<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$species = NULL;
		if (isset($_GET['id'])):
			// Get species for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from species where id=$id";
			$result = $db->query($query);
		
			$species = $result->fetch_assoc();		
		endif;
		if ($species == NULL):
			// No species found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$patient_id = $db->escape_string($_POST["id"]);
		
		// Prepare query and execute
		$query = "update species set name='$name', id='$id' where id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>