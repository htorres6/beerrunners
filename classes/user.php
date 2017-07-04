<?php 
class User extends Object {

protected static $table_columns= array("first_name", "email", "user_name", "password");



protected static $table= "users";

//PROPERTIES = $ (variables)

// public $user_photo_id; 
public $first_name;
public $email;
public $user_name;
public $password;




	// CREATE
	// Query function created "$db"

	// public function create(){
	// 	global $db;
		
	// 	$sql="INSERT INTO users(first_name, last_name, email, user_name, password)"; 
	// 	$sql.="VALUES('$this->first_name', '$this->last_name',";
	// 	$sql.="'$this->email', '$this->user_name', '$this->password');";

	// 	$sql_result=$db->query($sql);
	// 	if (!$sql_result) {
	// 		die("WTF.." . $db->conn->error);
	// 	}
	// }

	// READ
	public function get_user($username, $pass){
		global $db;

		$sql="SELECT * FROM users WHERE user_name='$username' AND password='$pass'";

		$sql_result=$db->query($sql);
		if (!$sql_result) {
			echo"WRRONG";
		} else {
			return $sql_result->fetch_object();
		}

	}

	// UPDATED
	public function update_user($id){
		global $db;

		$sql="UPDATE users SET first_name='$this->first_name', last_name='$this->last_name', address='$this->address', state='$this->state', phone_number='$this->phone_number', email='$this->email' WHERE id='$id'";
		if (!$db->query($sql)) {
			die("WTF ... " . $db->conn->error);
		}
	}


	// DELETE
	public function delete(){
		//
	}

}






?>