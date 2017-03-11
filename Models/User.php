<?php namespace Models;
use \Config\Database as Conexion;

class User 
{
	private $username;
	private $password;
	
	private $con;

	public function __construct()
	{
		$this->con = new Conexion();
	}

	public function set($attr, $content)
	{
		$this->$attr = $content;
	}

	public function get($attr)
	{
		return $this->$attr;
	}

	public function add()
	{
		$sql = "INSERT INTO users (username, password) 
			VALUES ('{$this->username}', '{$this->password}')";
		$this->con->query($sql);
	}

}