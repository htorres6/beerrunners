<?php 
require_once("../classes/ini.php");

$file= $_FILES['user_photo'];
$directory= __DIR__ . "/user_photos/";
$size= $file['size'];
$temp= $file['tmp_name'];
$name= $file['name'];
$target= $directory. $name;
$current= $_POST['current_photo'];


unlink("user_photos/".$current);

$id= $_SESSION['user_id'];
$sql="UPDATE users SET photo_path='$name' WHERE id='$id'";

$db->query($sql);

//THIS MESSAGE WILL BE SET AFTER PHOTO HAS BEEN UPDATEDA
Session::set_message("<p style='background-color: orange;'>PHOTO UPDATE COMPLETE::</p>");


if ($size < 2000000) {
	move_uploaded_file($temp, $target);
}


$db->redirect("../profile/profile.php");



// // echo $directory;

// var_dump($size);














// $user= new User();

// //escape values coming in from form
// $user->first_name= $db->escape_string($_POST['first_name']);
// $user->last_name= $db->escape_string($_POST['last_name']);
// $user->email= $db->escape_string($_POST['email']);

// $user->update($_SESSION['user_id']);

// //redirect user

// $db->redirect("../profile/profile.php");



?>