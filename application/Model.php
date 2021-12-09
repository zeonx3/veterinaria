<?php
use Illuminate\Database\Capsule\Manager as Database;
class Model extends PDO
{
	protected $_db;

	public function __construct(){
		$this->_db = new Database;
	}
}