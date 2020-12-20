<?php 
		require 'vendor/autoload.php';

		$con  = new MongoDB\Client();

		if ($con){
			// echo "Connection to database successfully";
		}
	
  
  // select a database
		$db = $con->postdb;
  		if ($db){
  				// echo "Database examplesdb selected";

  		}

  		// $postdb = $db->post;
  		// $postdb->deleteMany([
  		// 	'id' => "1"
  		// ]);

  

		


 ?>
