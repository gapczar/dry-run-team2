<?php

class AuthDAO {
	
	public function __construct(){}
	
	
	
	public function selectAll()
	{
		$sql = "select * from auth";
		$auth = Connect::execute($sql);
		return $auth;
	}
	
	public function selectEmailAndPassword($email,$password)
	{
		$sql = "select * from auth where email = '" .$email. "' and password = '".$password."'";
		$auth = $this->getList($sql);
		
		return $auth;
	}
	
	
	public function insert($auth){
		
		$sql = "INSERT INTO  auth (
		id ,
		username ,
		email ,
		password ,
		status
		)
		VALUES (
		NULL ,  '".$auth->getUsername()."',  '".$auth->getEmail()."',  '".$auth->getPassword()."',  '".$auth->getStatus()."'
		)";
		//var_dump($sql);exit;
		
		$auth = Connect::executeQuery($sql);
		
	}
	
	protected function readRow($row){
		$auth = new Auth();

		$auth->setId($row['id']);
		$auth->setUsername($row['username']);
		$auth->setEmail($row['email']);
		$auth->setPassword($row['password']);
		$auth->setStatus($row['status']);

		return $auth;
	}

	protected function getList($sqlQuery){
		$tab = Connect::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	
}