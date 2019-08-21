<?php
include '../libs/database.php';
include '../libs/config.php';

$db = new Database();
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = "select * from catogaries where id='$id'";
	$post = $db->select($query);
	$cat = $post->fetch_assoc();
}
 



$query = "select * from catogaries";
$cats = $db->select($query);

if(isset($_POST['update'])) {
	
	
	$title = mysqli_real_escape_string($db->link, $_POST['title']);
	$id = $_GET['id'];

	if(empty($title)) {
		echo "Fields Are Modetory";
	} else {
		$query = "update catogaries set title='$title' where id='".$id."' ";
		$run = $db->update($query);


	}
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-none">
<div class="container">
	<a class="navbar-brand" href="#">BLOGTOP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link float-left" href="index.php">Dashboard</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="add_post.php">Add post</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="add_cats.php">Add Category</a>
	      </li>
    	</ul>
    	<ul class="navbar-nav ml-auto">
    	    <li class="nav-item">
	        	<a class="nav-link" href="localhost/phpprac/project/blog">View BLog</a>
	       </li>
	       <li class="nav-item">
	        	<a class="nav-link" href="logout.php">Logout</a>
	       </li>
    	</ul>
   
  	</div>
</div> 
</nav>



<div class="container mt-5">
	<h1 class="blog-header text-center">Update Category </h1>
	
	<div class="row mt-5 ">
		<div class="col-md-8 col-sm-12 col-xs-12">
			<form action="" method="post" name="update_data">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" value="<?php echo $cat['title'];?>">
				</div>

				<button class="btn btn-lg btn-primary" name="update" value="update">Update</button>
			</form>
		</div>


		<?php include 'includes/footer.inc.php' ?>