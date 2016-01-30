<?php
	/*echo phpinfo();*/
	try {
		$connection = new Mongo('mongodb://neha:njayap3@ds061198.mongolab.com:61198/securedthoughts');
		$dbname   = $connection->selectDB('securedthoughts');
		$collecname = $dbname->csvdata;

		$data = array('trainline' => 'val1', 'route' => 'val2', 'runnumber' => 'val3', 'opID' => 'val4');
		$coll = $collecname->insert($data);
		$res = $coll::find(); //displays all records
		echo $res;
	}	
	catch(MongoConnectionException $e) 
	{
	    die("Failed to connect to database ".$e->getMessage());
	}





?>