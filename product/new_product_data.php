<?php 
	
	$new_item= $_POST['products_dropdown'];
		echo $new_item ."<br> <br>";

	$party_items= "";


// The message is irrelavent.. no need for a message
	// $party_supplies= isset($_POST['party_supplies']) ? $_POST['party_supplies'] : "Optional Message";
	

	if (isset($_POST['party_supplies'])) {
		$party_supplies= $_POST['party_supplies'];
		foreach ($party_supplies as $item) {
			$party_items .= $item .", ";
		}
	} else {
		$party_supplies= "Optional Message";
	}
	echo $party_items;
	echo "<br> <br>";

	
	$helium= $_POST['helium'];
		echo $helium;



?>