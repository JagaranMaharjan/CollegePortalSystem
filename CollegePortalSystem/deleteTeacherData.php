<?php
	#get id of user
	$id = $_GET['id'];
	$image = $_GET['image'];
	#echo "$id";

	#importing package of database
	include('dbConnection.php');

	$query = 'DELETE FROM teacher WHERE id='.$id;

	

	$run = mysqli_query($con, $query);
	if($run){
		unlink('images/teacher/'.'$image');
		header("Location:listTeacherData.php");
	}else{
		echo "query error";
	}
?>