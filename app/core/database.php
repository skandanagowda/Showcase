<?php

Class Database 
{

	public function db_connect()
	{

		try{

			$string = "mysql:host=localhost;dbname=showcase_db;";
			return $db = new PDO($string,'root','');

		}catch(PDOException $e)
		{
			die($e->getMessage());
		}
	}

	public function read($query,$data = [])
	{

		$DB  = $this->db_connect();
		$stm = $DB->prepare($query);

		if(count($data) > 0){

			$check = $stm->execute($data);
		}else{
			$stm = $DB->query($query);
			$check = 0;
			if($stm){
				$check = 1;
			}
		}

		if($check)
		{
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		return false;

	}

	public function write($query,$data = [])
	{

		$DB  = $this->db_connect();
		$stm = $DB->prepare($query);

		if(count($data) > 0){

			$check = $stm->execute($data);
		}else{
			$stm = $DB->query($query);
			$check = 0;
			if($stm){
				$check = 1;
			}
		}

		if($check)
		{
			return true;
		}

		return false;

	}


}