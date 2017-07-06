<?php 
require_once("../classes/ini.php");

$user= new User();

//escape values coming in from form

$user->first_name= $db->escape_string($_POST['first_name']);

$user->email= $db->escape_string($_POST['email']);

$user->update($_SESSION['user_id']);

//redirect user

$db->redirect("../profile/profile.php");



?>