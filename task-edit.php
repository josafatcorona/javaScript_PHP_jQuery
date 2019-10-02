<?php 
include('database.php');
if(isset($_POST['name'])){
	$name = $_POST['name'];
	$description = $_POST['description'];
	$id= $_POST['id'];
	echo $id." ".$name." ".$description;
	$query = "UPDATE task SET name = '$name', description = '$description' where id=$id";
	$result = mysqli_query($connection,$query);
	if(!$result) {
		die('Query Failed');
	}
	echo "Task Added Successfully";
}

 ?>