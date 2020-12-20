<?php 
		require 'vendor/autoload.php';

		$client  = new MongoDB\Client;


		$companydb = $client->companydb;

		// $result = $companydb->createCollection('mycollection');
		
		// $result1 =$companydb->dropCollection('mycollection');

		 foreach ($companydb->listCollections() as $c => $collection) {
		 	var_dump($collection);
		 }



 ?>