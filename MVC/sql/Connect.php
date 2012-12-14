<?php

class Connect {
	
	
	
	static public function getConnection(){
		$conn = mysql_connect(Property::getHost(), Property::getUser(), Property::getPassword());
		mysql_select_db(Property::getDatabase());
		if(!$conn){
			throw new Exception('could not connect to database');
		}
		return $conn;
	}
	
	
	static public function executeQuery($sql){
			return mysql_query($sql, self::getConnection());
		}
	
	
	static public function execute($sqlQuery){

		$connection = self::getConnection();
		$result = self::executeQuery($sqlQuery);
		
		if(!$result){
			throw new Exception(mysql_error());
		}
		$i=0;
		$tab = array();
		while ($row = mysql_fetch_array($result)){
			$tab[$i++] = $row;
		}
		//mysql_free_result($result);
		return $tab;
		}
}


?>