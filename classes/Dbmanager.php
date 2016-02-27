<?php


require_once 'settings/config.php';

class Dbmanager{
	private $con;

	public function __construct(){
		$this->con = mysqli_connect($host, $user, $pass, $db);
		if(!$this->con){
			throw new exception('There was an error occured during the connection process!');
		}
	}

	public function query($query){
		$result = mysqli_query($this->con, $query);
	}
	
}

$dbase = mysqli_connect($host, $user, $pass, $db);