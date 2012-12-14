<?php


class Property {
	
	
	private static $host = '192.168.1.120';
	private static $user = 'root';
	private static $password = '';
	private static $database = 'dry_run_team_2';
	
	
	public static function getHost()
	{
		return self::$host;
	}
	
	public static function getUser()
	{
		return self::$user;
	}
	
	public static function getPassword()
	{
		return self::$password;
	}
	
	public static function getDatabase()
	{
		return self::$database;
	}
	
}
