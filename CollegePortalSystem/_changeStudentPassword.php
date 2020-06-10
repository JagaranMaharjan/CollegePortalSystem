<?php
	session_start();
	$sessionUser = $_SESSION['username'];
	$sessionPass = $_SESSION['password'];
	$oldPassword = $_POST['oldPassword'];
	$newPassword = $_POST['newPassword'];
	$confirmPassword = $_POST['confirmPassword'];
	/*echo "$sessionUser";
	echo "$sessionPass";
	echo "$oldPassword";
	echo "$newPassword";
	echo "$confirmPassword";*/
	if ($oldPassword != null && $newPassword != null && $confirmPassword != null) {
		if ($sessionPass == $oldPassword) {
			if ($newPassword == $confirmPassword) {
				//echo "save new password to database";
				include("dbConnection.php");
				$query = "UPDATE student SET password='$newPassword' where fullname='$sessionUser'";
				$run = mysqli_query($con, $query);
				if ($run) {
					header("location:logout.php");
				}else{
					echo "query error";
				}
			}else{
				header("location:changeStudentPassword.php?msg=new and confirm password are not matched");
			}
		}else{
			header("location:changeStudentPassword.php?msg=invalid old password");
		}
	}else{
		header("location:changeStudentPassword.php?msg=Fill all the fields");
	}
	
?>