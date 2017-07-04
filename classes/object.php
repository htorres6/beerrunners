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
		// return $db->auto_id();
	}


	public function class_properties(){
		$properties= array();

//CREATING A foreach loop FOR AN ARRAY
		foreach(static::$table_columns as $column) {
			if (property_exists($this, $column)) {
				$properties[$column]=$this->$column;
			}
		}
		return $properties;
	}





}//END OF CLASS









?>