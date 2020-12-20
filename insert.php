<?php 
	require 'vendor/autoload.php';

	$client  =  new MongoDB\Client;


	$db  =  $client->postdb;


	// $post  = $db->createCollection('post');

	// foreach ($db->listCollections() as $collection){
	// 	var_dump($collection);
	// }

	$post = $db->post;
	// $insert = $post->insertOne(
	// 		["id" => "1","title" => "HTML"]


	// );

	// var_dump($insert->getInsertedId());

	$find = $post->find();
	// var_dump($find);

	foreach ($find as $doc){
		var_dump($doc);
	}



 ?>