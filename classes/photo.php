<?php 

class Photo{


	public $temp_name;
	public $type;
	public $size;
	public $name;
	public $directory= "user_photos/";


	public function up_load_photo($file, $current_photo, $id){
		global $db;

		$temp_name= $file['tmp_name'];
		$size= $file['size'];
		$name= $file['name'];
		$target= "user_photos/".$name;

		if (file_exists($this->directory.$current_photo)){
			if (!unlink($this->directory.$current_photo)) {
				return false;
			}
		}

		if (!move_uploaded_file($temp_name, $target)){
			return false;
			//echo $db->conn->error;
		}

		$sql="UPDATE users SET photo_path='$name' WHERE id='$id'";
		if (!$db->query($sql)) {
			return false;
		}
	
	}


}//END OF CLASS





?>