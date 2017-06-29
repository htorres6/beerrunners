<?php 
require_once("../classes/ini.php");


$user= new User();

$user->user_name= $db->escape_string($_POST['username']);

$user->password= md5($db->escape_string($_POST['psw']), $user->user_name);





if ($user->get_user($user->user_name, $user->password)) {
	$_SESSION['valid_user']= $user->user_name;
	
	Session::set_message("<h1 style='color: white;' class='text-center'>Welcome " . $user->user_name ."</h1>");
	
	$db->redirect("../index.php");
}else {
	echo"PASSWORD FALSE";
}













?>