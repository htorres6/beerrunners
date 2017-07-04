<?php 
require_once("../classes/ini.php");

$user= new User();

//escape values coming in from form

$user->first_name= $db->escape_string($_POST['first_name']);
$user->last_name= $db->escape_string($_POST['last_name']);
$user->address= $db->escape_string($_POST['address']);
$user->state= $db->escape_string($_POST['state']);
$user->phone_number= $db->escape_string($_POST['phone_number']);
$user->email= $db->escape_string($_POST['email']);

$user->update_user($_SESSION['user_id']);

//redirect user

$db->redirect("../profile/profile.php");



?>