<?php 

class Auth {
	
	protected $id;
	protected $username;
	protected $email;
	protected $password;
	protected $status;
	
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getUsername()
	{
		return $this->username;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function getStatus()
	{
		return $this->status;
	}
	
	public function setId($id)
	{
		$this->id = $id;
	}
	public function setUsername($username)
	{
		$this->username = $username;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}
	public function setStatus($status)
	{
		$this->status = $status;
	}
	
}