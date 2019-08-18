<?php
include 'libs/database.php';
include 'libs/config.php';

$db = new Database(); 

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "select * from post where 	id = '$id'";
	$post = $db->select($query);

	$row = $post->fetch_array();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
    	<ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="post.php">All post</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="about.php">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="contact.php">Contact</a>
	      </li>
    	</ul>
   
  	</div>
</div> 
</nav>



<div class="container mt-5">
	
	<div class="row mt-5 ">
		<div class="col-md-8 col-sm-12 col-xs-12">
			
			<div class="blog-post mb-5">
				<h1 class="blog-post-title"><?php echo $row['title']; ?></h1>

				<em class="blog-post-meta"><?php echo $row['date']; ?> by <a href="#"><?php echo $row['author']; ?></a></em>
				<hr>
				<p><?php echo $row['content']; ?></p>
			</div>
			
		</div>


<?php include 'inc/footer.inc.php' ?>