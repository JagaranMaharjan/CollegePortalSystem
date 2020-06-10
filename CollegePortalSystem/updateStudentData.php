<?php
	session_start();
	include('dbconnection.php');

	$id = $_SESSION['id'];
	$image = $_SESSION['image'];

	//New User Data
	$fullname = $_POST['fullname'];
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
			unlink('images/student/'.'$image');
			echo "image has uplodes to the folder";
		}
		else{
			echo "image hasnot uplodes to the folder";
			
		}
			 
	}
	
	if($fileName==null){
		$query = "UPDATE student SET fullname='$fullname',dob='$dob',gender='$gender',address='$address',grade='$grade',courseType='$courseType',password='$password' where id=$id";
	}else{
		$query = "UPDATE student SET image='$fileName',fullname='$fullname',dob='$dob',gender='$gender',address='$address',grade='$grade',courseType='$courseType',password='$password' where id=$id";
	}
	$run = mysqli_query($con, $query);
	if($run){
		echo "User data updated"."<br>";
		header("location:listStudentData.php");
	}else{
		echo "<br>"."User data not updated";
		header("location:editStudentData.php");
	}

?>