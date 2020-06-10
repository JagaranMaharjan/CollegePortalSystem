<?php
	#get id of user
	$id = $_GET['id'];
	$image = $_GET['image'];
	#echo "$id";

	#importing package of database
	include('dbConnection.php');

	$query = 'DELETE FROM student WHERE id='.$id;

	

	$run = mysqli_query($con, $query);
	if($run){
		unlink('images/student/'.'$image');
		header("Location:listStudentData.php");
	}else{
		echo "query error";
	}
?>