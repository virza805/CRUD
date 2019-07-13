<?php 

class Database {

	public $host    = DB_HOST;
	public $user    = DB_USER;
	public $pass    = DB_PASS;
	public $dbname  = DB_NAME;

	public $link;
	public $error;

	public function __construct(){
		$this->connectDB();
	}

	public function connectDB(){
		$this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
		if(!$this->link){
			$this->error = "Connection Faild";
			return false;
		}
	}
	public function insert($query){
		$insert = $this->link->query($query) or die($this->link->error.__Line__) ;
		if ($insert){
			return $insert;
		}else{
			return false;
		}

	}
	public function select($query){
		$select = $this->link->query($query) or die($this->link->error.__Line__) ;
		if ($select->num_rows > 0){
			return $select;
		}else{
			return false;
		}

	}
	public function delete($query){
		$delete = $this->link->query($query) or die($this->link->error.__Line__) ;
		if ($delete){
			return $delete;
		}else{
			return false;
		}

	}

	public function update($query){
		$update = $this->link->query($query) or die($this->link->error.__Line__) ;
		if ($update){
			return $update;
		}else{
			return false;
		}

	}

}


 ?>