<?php 
	require_once('../classes/ini.php');

	$username= $db->escape_string($_POST['betos_key']);

	$sql="SELECT user_name FROM users WHERE user_name='$username'";

	if ($db->query($sql)) {
		echo'User Name Taken';

	 } 
	 // else{
	// 	echo'';
	// }













?>