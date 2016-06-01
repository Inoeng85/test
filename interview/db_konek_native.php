<?php

class dbKonekMySQL {
	
	public $dbh;
	public $host;
	public $user;
	public $password;
	public $database;
	public $query;
	public $result;
	public $row;

	public function __construct($host, $user, $password, $database){
		$this->host 	= $host;
		$this->user 	= $user;
		$this->password = $password;
		$this->database = $database;
		
		$this->connectDB();
	}
	
	public function connectDB(){
		$this->dbh = mysql_connect($this->host, $this->user, $this->password);
		
		if($this->dbh){
			mysql_select_db($this->database, $this->dbh);	
			
			return true;
		}
		return false;
	}

	public function execute($query){
		$this->query = $query;
		$this->result = mysql_query($this->query, $this->dbh);
	}

	public function get_array(){
		$i = 0;
		while ($data = mysql_fetch_array($this->result, MYSQL_BOTH)) {
			$this->row[$i] = $data;
			$i++;
		}
		
		return $this->row;
	}

	public function get_num_rows(){
		$this->num_rows = mysql_fetch_row($this->result);
		return $this->num_rows;
	}	

	public function close_connection(){
		mysql_close($this->dbh);
	}		
	
}

?>

