<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

// Get all of my customers 
$app->get('/api/customers', function(Request $request, Response $response){
    $sql = "SELECT * FROM customers";
 
	try{
		//Get the Database Object
		$db = new db();
		// Connect to the Database and diplay error message in case of failure
		$db = $db->connect();
		
		$stmt = $db->query($sql);
		$customers = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($customers);
		
	}catch(PDOException $e){
		echo '("error": "text": '.$e->getMessage().'}';
	}
});


// Isolate one of my customers 
$app->get('/api/customers', function(Request $request, Response $response){
    $sql = "SELECT * FROM customers";
 
	try{
		//Get the Database Object
		$db = new db();
		// Connect to the Database and diplay error message in case of failure
		$db = $db->connect();
		
		$stmt = $db->query($sql);
		$customers = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($customers);
		
	}catch(PDOException $e){
		echo '("error": "text": '.$e->getMessage().'}';
	}
});


// Add a new customers to Thimoo customer list
$app->get('/api/customers', function(Request $request, Response $response){
    $sql = "SELECT * FROM customers";
 
	$sql = "INSERT INTO customers (first,last,email,address,city,state) VALUE
	(:fisrt,:last,:email,:address,:city,:state,:country,offertype,:pricing)";
 
	try{
		//Get the Database Object
		$db = new db();
		// Connect to the Database and diplay error message in case of failure
		$db = $db->connect();
		
		$stmt = $db->prepare($sql) 
		$stmt->bindParam('first',		$first);
		$stmt->bindParam('last',		$last);
		$stmt->bindParam('email', 		$email);
		$stmt->bindParam('address', 	$address);
		$stmt->bindParam('city', 		$city);
		$stmt->bindParam('state', 		$state);
		$stmt->bindParam('country',		$country);
		$stmt->bindParam('offertype',	$offertype);
		$stmt->bindParam('pricing', 	$pricing);

		$stmt->excute();
		echo '{"notice": {"text "Customer profil created"}';	
		
		
	}catch(PDOException $e){
		echo '("error": "text": '.$e->getMessage().'}';
	}
});



// Delete customers out of Thimoo customer list
$app->get('/api/customers', function(Request $request, Response $response){
    $sql = "SELECT * FROM customers";
 
	$sql = "INSERT INTO customers (first,last,email,address,city,state) VALUE
	(:fisrt,:last,:email,:address,:city,:state,:country,offertype,:pricing)";
 
	try{
		//Get the Database Object
		$db = new db();
		// Connect to the Database and diplay error message in case of failure
		$db = $db->connect();
		
		$stmt = $db->prepare($sql) 
		$stmt->bindParam('first',		$first);
		$stmt->bindParam('last',		$last);
		$stmt->bindParam('email', 		$email);
		$stmt->bindParam('address', 	$address);
		$stmt->bindParam('city', 		$city);
		$stmt->bindParam('state', 		$state);
		$stmt->bindParam('country',		$country);
		$stmt->bindParam('offertype',	$offertype);
		$stmt->bindParam('pricing', 	$pricing);

		$stmt->excute();
		echo '{"notice": {"text "Customer profil created"}';	
		
		
	}catch(PDOException $e){
		echo '("error": "text": '.$e->getMessage().'}';
	}
});