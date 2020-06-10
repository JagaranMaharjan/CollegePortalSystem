<?php
	$userType = $_POST['userType'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	include("dbConnection.php");
	//$rememberMe = $_POST['rememberMe'];

	/*echo "$userType";
	echo "$username";
	echo "$password";
	echo "$rememberMe";*/
	if ($username != null && $password != null ) {
		if($userType == "admin"){
			if ($username == "admin" && $password == "admin") {
				if(isset($_POST['rememberMe'])){
					//cookie set garnu paryo
					setcookie('userType', $userType, time()+60*2);
					setcookie('username', $username, time()+60*2);
					setcookie('password', $password, time()+60*2);
				}
				//without cookie login hunu paryo rw session create hunu paryo
				session_start();
				$_SESSION['username'] = $username;
				header("location: welcome.php");
			}else{
				header("location:login.php?msg=invalid username or password");
			}
		}else if ($userType == "student") {
			$myusername = mysqli_real_escape_string($con,$_POST['username']);
	      	$mypassword = mysqli_real_escape_string($con,$_POST['password']); 

	      	$sql = "SELECT id FROM student WHERE fullname = '$myusername' and password = '$mypassword'";
		    $result = mysqli_query($con,$sql);
		    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		    $active = $row['active'];
		      
		    $count = mysqli_num_rows($result);
		    // If result matched $myusername and $mypassword, table row must be 1 row
			
		    if($count == 1) {	         
		        if(isset($_POST['rememberMe'])){
					//cookie set garnu paryo
					setcookie('userType', $userType, time()+60*2);
					setcookie('username', $myusername, time()+60*2);
					setcookie('password', $mypassword, time()+60*2);
				}
				//without cookie login hunu paryo rw session create hunu paryo
				session_start();
				$_SESSION['studentUsername'] = $myusername;
				$_SESSION['studentPassword'] = $password;
				header("location: studentWelcome.php");
		    }else {
		        header("location:login.php");
		    }
		}else if ($userType == "teacher") {
			$myusername = mysqli_real_escape_string($con,$_POST['username']);
	      	$mypassword = mysqli_real_escape_string($con,$_POST['password']); 

	      	$sql = "SELECT id FROM teacher WHERE fullname = '$myusername' and password = '$mypassword'";
		    $result = mysqli_query($con,$sql);
		    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		    $active = $row['active'];
		      
		    $count = mysqli_num_rows($result);
		    // If result matched $myusername and $mypassword, table row must be 1 row
			
		    if($count == 1) {	         
		        if(isset($_POST['rememberMe'])){
					//cookie set garnu paryo
					setcookie('userType', $userType, time()+60*2);
					setcookie('username', $myusername, time()+60*2);
					setcookie('password', $mypassword, time()+60*2);
				}
				//without cookie login hunu paryo rw session create hunu paryo
				session_start();
				$_SESSION['teacherUsername'] = $myusername;
				$_SESSION['teacherPassword'] = $password;
				header("location: teacherWelcome.php");
		    }else {
		        header("location:login.php");
		    }
		}
	}else{
		header("location:login.php");
	}
	
	
?>