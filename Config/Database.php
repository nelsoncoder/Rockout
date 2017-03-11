<?php namespace Config;

class Database {

	private $data = array(
		"host" => "localhost",
		"user" => "root",
		"pass" => "root",
		"name" => "users"
	);

	private $con;

	public function __construct()
	{
		$this->con = new \mysqli(
			$this->data['host'], 
			$this->data['user'], 
			$this->data['pass'],
			$this->data['name']
		);
	}

	public function query($sql)
	{
		return $this->con->query($sql);
	}
	
}