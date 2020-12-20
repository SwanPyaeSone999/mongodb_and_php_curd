<?php 
	require 'config.php';




		$postdb  = $db->post;
$postdb->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);


// $_SESSION['success'] = "Book deleted successfully";
header("Location: index.php");



 ?>