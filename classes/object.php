<?php 
//CREATING NEW CLASS
class Object {


	public function create() {

		global $db;
		$prop= $this->class_properties();

							//						//COLUMN NAMES
		$sql="INSERT INTO ". static::$table ."(".implode(", ", array_keys($prop)).")";
		$sql.=" VALUES('".implode("', '", array_values($prop))."');";

		//COMMUNICATE WITH THE DATABASE using the query
		$fp=$db->query($sql);
		//TESTING IF THIS PRODUCT INSTER FUNCTUALITY
		if (!$fp) {
			die("IDGAF!!.." . $db->conn->error);
		}
		return $db->auto_id();
	}








	// UPDATED
	public function update($id){
		global $db;
		$prop= $this->class_properties();
		$properties= array();

		foreach ($prop as $key => $value) {
			if (isset($value)) {
				$properties[]="{$key}='{$value}'";
			}
		}

	//LAST_NAME, ADDRESS, STATE, PHONE_NUMBER ARE DELETED
		$sql="UPDATE ". static::$table ." SET ".implode(", ", $properties)." WHERE ".static::$where_clause."='$id'";

		if (!$db->query($sql)) {
			die("WTF ... " . $db->conn->error);
		}
	}
 




	public function class_properties(){
		$properties= array();

//CREATING A foreoop FOR AN ARRAY
		foreach(static::$table_columns as $column) {
			if (property_exists($this, $column)) {
				$properties[$column]=$this->$column;
			}
		}
		return $properties;
	}


//obstraction 
	//create protected static functions 
		//


}//END OF CLASS









?>