<?php
include '../libs/database.php';
include '../libs/config.php';

$db = new Database(); 

$query = 'select * from post';
$post = $db->select($query);


$query = "select * from catogaries";
$cats = $db->select($query);

// delete post


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
	      <li class="nav-item">
	        <a class="nav-link" href="add_post.php">Add post</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="add_cats.php">Add Category</a>
	      </li>
    	</ul>
    	<ul class="navbar-nav ml-auto">
    	    <li class="nav-item">
	        	<a class="nav-link" href="../index.php">View BLog</a>
	       </li>
	       <li class="nav-item">
	        	<a class="nav-link" href="logout.php">Logout</a>
	       </li>
    	</ul>
   
  	</div>
</div> 
</nav>



<div class="container mt-5">
	<h1 class="blog-header text-center">Manage Post </h1>
	
	<div class="row mt-5 ">
		<div class="col-md-12 col-sm-12 col-xs-12">
			
			<table class="table table-striped">
				<thead>
					<tr>
				      <th scope="col">Post ID</th>
				      <th scope="col">Post Title</th>
				      <th scope="col">Post Author</th>
				      <th scope="col">Post Date</th>
				    </tr>
				</thead>
				<tbody>
					<?php while($row = $post->fetch_assoc()): ?>
					<tr>
				      <th><?php echo $row['id']; ?></th>
				      <td><a href="edit_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a> <a name="delete" value="delete" href="index.php?id=<?php echo $row['id']; ?>" class="btn btn-sm text-danger">Delete</a></td>
				      <td><?php echo $row['author']; ?></td>
				      <td><?php echo $row['date']; ?></td>
				    </tr>
					<?php endwhile; ?>
				</tbody>
			</table>

			<h2 class="mt-5 text-center">Manage Category</h2>

			<table class="table table-striped">
				<thead>
					<tr>
				      <th scope="col">Category ID</th>
				      <th scope="col">Category Title</th>
				      
				    </tr>
				</thead>
				<tbody>
					<?php while($row = $cats->fetch_assoc()): ?>
					<tr>
				      <th><?php echo $row['id']; ?></th>
				      
				      
				      <td><a href="edit_cat.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a> <a name="delete" value="delete" href="index.php?id=<?php echo $row['id']; ?>" class="btn btn-sm text-danger">Delete</a></td>
				      <?php
				      	// delete category
						if(!empty($_GET['id'])) {
							$id = $_GET['id'];
							$query = "delete from catogaries where id = $id";
							$run = $db->delete($query);

						}

				      ?>
				    </tr>
					<?php endwhile; ?>
				</tbody>
			</table>


		</div>

<?php
	
	
	// delete Post
	
	if(!empty($_GET['id'])) {
		$id = $_GET['id'];
		$query = "delete from post where id = $id";
		$run = $db->delete($query);

	}


	
	

?>