<?php 
require_once("../classes/ini.php");

$photo= new Photo();

$img= $_FILES['user_photo'];

$photo->file=$img['name'];
$photo->size=$img['size'];
$photo->photo_path="user_photos/".$photo->file;
$photo->user_id=$_SESSION['user_id'];

$current= $_POST['current_photo'];


$photo->up_load_photo($img, $current, $photo->user_id);


$user= new User();

//escape values coming in from form
$user->first_name= $db->escape_string($_POST['first_name']);
$user->last_name= $db->escape_string($_POST['last_name']);
$user->email= $db->escape_string($_POST['email']);

$user->update($_SESSION['user_id']);



if (!$photo->up_load_photo($_FILES['user_photo'], $current, $id)) {
	Session::set_message("<p style='background-color: red;'>PHOTO UPLOAD FUNCTION FAILED</p>");
	$db->redirect("../profile/profile.php");
} else{
	Session::set_message("<p style='background-color: green;'>PHOTO UPDATE COMPLETE</p>");
}

//redirect user

$db->redirect("../user/edit_profile.php");

















// var_dump($size);





// $db->redirect("../profile/profile.php");



?>