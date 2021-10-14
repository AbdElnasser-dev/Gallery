<?php 


class Database{

	public function db_connect(){
		try{
			$string = "mysql:host=localhost;dbname=catalog;";
			return $db = new PDO($string,'root','');
		}catch(PDOException $err){
			die($err->getMessage());
		}
	}
	//Get Data From A Database
	public function read($query,$data=[]){
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
	//Insert Into A Database
	public function write($query,$data=[]){
		$DB = $this->db_connect();
		
		if(count($data)>0){
			$stm = $DB->prepare($query);
			$chk = $stm->execute($data);
		}else{
			$chk = $DB->query($data);
		}
		if($chk){
			return true;
		}else{
			return false;

		}
	}
	//Delete Into A Database
	public function delete(){}
	//Update Into A Database
	public function update(){}
}