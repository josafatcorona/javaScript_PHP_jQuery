<?php  
include('database.php');
if (isset($_POST['id'])) {
	$id = $_POST['id'];
	$query = "DELETE FROM task where id=$id";
	$result= mysqli_query($connection,$query);
	if(!$result){
		die("Query Failed");
	}
	echo "Taks deleted successfullyk";
}
?>