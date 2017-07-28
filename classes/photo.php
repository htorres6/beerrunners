<?php 

class Photo{

	public $file;
	public $size;
	public $photo_path;
	public $user_id;



	public function up_load_photo($file, $current_photo, $id){
		global $db;

		$temp_name= $file['tmp_name'];
		$name= $file['name'];
		$target= $this->photo_path;

		if (file_exists($current_photo)){
			unlink($current_photo);
			$sql2="DELETE FROM photos WHERE user_id='$id'";
			$db->query($sql2);
		}

		if (move_uploaded_file($temp_name, $target)){
			$sql="INSERT INTO photos(file, size, photo_path, user_id) VALUES('$name', '$this->size', '$this->photo_path', '$id')";

			$db->query($sql);
			return true;
		}


	}


}//END OF CLASS





?>