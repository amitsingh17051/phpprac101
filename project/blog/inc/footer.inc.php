<?php



$query = 'select * from catogaries';
$category = $db->select($query);


?>


		<div class="col-md-3 offset-md-1 col-sm-12 col-xs-12">
			<div class="sidebar-about bg-light p-4">
				<h4>About</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit magnam quae ad iusto officia vitae modi autem corporis sed voluptates?</p>
			</div>

			<div class="sidebar-archive mt-5 bg-light p-4">
				<h4>Category</h4>
				<hr>	
				<?php while($row = $category->fetch_assoc()): ?>
				<ul class="category-list list-group mt-3">
					<a href="category.php?id=<?php echo $row['id']; ?>" class="list-group-item"
					style="text-decoration:none;"><?php echo $row['title']; ?></a>
				</ul>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<nav aria-label="Page navigation example">
		<ul class="pagination">
			<li class="page-item"><a class="page-link" href="#">Previous</a></li>
		    <li class="page-item"><a class="page-link" href="#">1</a></li>
		    <li class="page-item"><a class="page-link" href="#">2</a></li>
		    <li class="page-item"><a class="page-link" href="#">3</a></li>
		    <li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul>
	</nav>
</div>



<footer class="blog-footer text-center mt-5">
    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
       <a href="#">Back to top</a>
    </p>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>