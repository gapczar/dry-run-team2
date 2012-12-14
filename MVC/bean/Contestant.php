<?php

class Contestant {
	
	
	
	protected $id;
	protected $name;
	protected $age;
	protected $country;
	
	
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getAge()
	{
		return $this->age;
	}
	
	public function getCountry()
	{
		return $this->country;
	}
	
	
	public function setId($id)
	{
		$this->id = $id;
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function setAge($age)
	{
		$this->age = $age;
	}
	
	public function setCountry($country)
	{
		$this->country = $country;
	}
	
}