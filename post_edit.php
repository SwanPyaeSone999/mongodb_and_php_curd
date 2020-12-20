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
                    Post Edit Form
                  </div>
                  <div class="col-md-6">
                    <a href="index.php">
                      <button class="btn btn-dark btn-lg float-right" name="btn-create">Back</button>
                    </a>
                  </div>
                </div>
              </div>
          <form action="" method="post">

            <?php 
              if ($_GET['id']) {
                $id  = $_GET['id'];
                // echo $id;
                $postdb = $db->post;
                $row = $postdb->findOne([ '_id' => new MongoDB\BSON\ObjectId($_GET['id'])]);
                $title = $row['title'];
                $description = $row['description'];

              }
               

             ?>
              <div class="card-body">
                <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" placeholder="Enter Title" id="title" value="<?php echo $title; ?>" name="title">
                </div>
                <div class="form-group">
                     <label for="description">Description</label>
                      <textarea class="form-control"   value=""  name="description"><?php echo $description; ?></textarea>
                </div>
 
              </div>
              <div class="card-footer">
                <button class="btn btn-success" name="btn-edit">Edit</button>
              </div>
              
          </div>
        </div>
   
      </form>

        <?php 
          //post edit
           if (isset($_POST['btn-edit'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
             $postdb->updateOne(
       ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
       ['$set' => ['title' => " $title", 'description' => "$description"]]
   );
          }
         ?>

	<script src="library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="library/bootstrap/popper.min.js"></script>
	<script src="library/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>