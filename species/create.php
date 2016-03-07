<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New Species</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">id:</label>
			<input type="text" id="id" name="d">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>