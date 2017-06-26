<?php 
require_once"../classes/ini.php";

$item= $db->escape_string($_POST['item']);

$file= $_FILES['product_image'];
$product_image= $file['name'];


$quantity= $db->escape_string($_POST['quantity']);
$price= $db->escape_string($_POST['price']);


$sql="INSERT INTO beers(picture, name, quantity, price) VALUES('$product_image', '$item', '$quantity', '$price');";

if ($db->query($sql)) {
	$db->redirect('product_insert.php');
}

?>