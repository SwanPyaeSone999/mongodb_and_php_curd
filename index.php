<?php 
		require_once 'config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>bootstrap template</title>
	<link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="library/fontawesome/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	

				<div class="container mt-5" >
					<div class="card justify-content-center" >
  						<div class="card-header">
  							<div class="row">
  								<div class="col-md-6">
  									Post Creating Form
  								</div>
  								<div class="col-md-6">
  									<a href="post_create.php">
  										<button class="btn btn-primary float-right" >+Add Posts</button>
  									</a>
  								</div>
  							</div>
  						</div>
  						<div class="card-body">
  							
  							<table class="table">
  								<thead>
  									<tr>
  										<!-- <th>ID</th> -->
  										<th>Title</th>
  										<th>Description</th>
  										<th>Edit/Delete</th>
  										
  									</tr>
  									
  								</thead>
  							    <?php 
                      $postdb = $db->post;
                      $rows = $postdb->find();
                        // var_dump($find);
                    
                    foreach ($rows as $row){
                       $oid  = $row['_id'];
                       // echo $oid;                      
                     ?>
  								<tbody>
  									<tr>
  										<!-- <th><?php echo $row['id']; ?></th> -->
  										<th><?php echo $row['title']; ?></th>
  										<th><?php echo $row['description']; ?></th>
  										<th>
  											<a href="post_edit.php?id=<?php echo  $oid;  ?>">
  												<button type="button" class="btn btn-outline-success"><i class="fa fa-edit mr-2"></i>Edit</button>
  											</a>
  											<a href="post_delete.php?id=<?php echo  $oid; ?>">
  												<button type="button" class="btn btn-outline-danger" onclick="return confirm('Are You Sure You Want to delete?')"><i class="fa fa-trash mr-2"></i>Delete</button>
  											</a>
  										</th>
  									</tr>
  								</tbody>
  							<?php } ?>
  							</table>
  						</div>
  						
					</div>
				</div>




	<script src="library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="library/bootstrap/popper.min.js"></script>
	<script src="library/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>