<?php
if(!empty($_GET['delete'])) {
	$id = $_GET['delete'];
	$query = "delete from post where id = '$id'";
	$run = $db->delete($query);
}

?>