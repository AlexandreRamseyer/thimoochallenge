<?php
    class db 
	// List of all properties needed
	
	private $dbhost = 'localhost';
	private $dbuser = 'root';
	private $dbpass = 'api_launch';
	private $dbname = 'client_thimoo_app';
	
	try{
		$db = new db();
		$db = $db->connect();
		$stmt = $db->query($sql);
		$customers = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($customers);
		
	}catch(PDOException $e){
		echo '("error": "text": '.$e->getMessage().'}';
	}
});
