<?php
require_once("../classes/ini.php");


//NEW OBJECT CREATED
$user= new User();

//PROPER SYNTAX FOR AN OBJECT
$user->first_name= $db->escape_string($_POST['first_name']);
//TESTING $user
// if (isset($user->first_name)) {
// 	echo"FNAME WORKS";
// }
$user->last_name= $db->escape_string($_POST['last_name']);
$user->email= $db->escape_string($_POST['email']);
$user->user_name= $db->escape_string($_POST['username']);
// if (isset($user->user_name)) {
// 	echo $user->user_name;
// }

$temp_pass= $db->escape_string($_POST['psw']);

$user->password= md5($temp_pass, $user->user_name);


//USING $user->create(); FUNCTION INTO MYSQL DATABASE
$user->create();
$_SESSION['valid_user']= $user->user_name;
Session::set_message("<h2 class='alert alert-success text-center'>Hello ".$user->first_name."</h2>");


$db->redirect('../index.php');

//AFTER THE $user IS CREATED = BLANK PAGE



?>