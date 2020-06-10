<?php
	include('dbconnection.php');

	//New User Data
	$fullName = $_POST['fullname'];
	$dob = $_POST['dob']; 
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$grade = $_POST['grade'];
	$courseType = $_POST['courseType'];
	$password = $_POST['password'];


	//File Upload Work
	$currentDirectory=getcwd();
	$uploadDirectory="/images/student/"; // folder where images are stored
	$error=[];
	$fileExtensionArray=['jpeg','png','jpg'];
	$fileName=$_FILES['image']['name'];
	$fileSize=$_FILES['image']['size'];
	$fileTempName=$_FILES['image']['tmp_name'];
	 
	$fileType=$_FILES['image']['type'];
	$extension=explode('.',$fileName);
	$fileExtension=strtolower(end($extension));
	$uploadPath=$currentDirectory.$uploadDirectory.basename($fileName);

	if(!in_array($fileExtension,$fileExtensionArray))
	{
		$error[]="you can upload only jpeg,jpg,png image";
	}
	
	
	if(empty($error))
	{
		
		 if(move_uploaded_file($fileTempName,$uploadPath)) // upload the image to destination folder
		{
			echo "image has uplodes to the folder";
		}
		else
		echo "image hasnot uplodes to the folder";	 
	}

	$query = "INSERT INTO student VALUES(null,'$fileName','$fullName','$dob','$gender','$address','$grade','$courseType','$password')";
	$run = mysqli_query($con, $query);
	if($run){
		echo "New user data added"."<br>";
		header("location:welcome.php");
	}else{
		echo "<br>"."New user data not added";
		header("location:addStudent.php");
	}

?>