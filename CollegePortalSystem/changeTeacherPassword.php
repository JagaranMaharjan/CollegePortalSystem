<?php
	session_start();
	if($_SESSION['teacherUsername']!=null){
		$username = $_SESSION['teacherUsername'];
		$password = $_SESSION['teacherPassword'];
		/*echo "$username";
		echo "$password";*/
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Teacher Password</title>
	<style type="text/css">
		body{
			background-color: orange;
			font-family: sans-serif;
		}
	</style>
</head>
<body>
	<center>
		<form method="POST" action="_changeTeacherPassword.php">
			<table>
				<caption><h2>Change Password</h2></caption>
				<tr>
					<td>Old Password</td>
					<td><input type="password" name="oldPassword"></td>
				</tr>
				<tr>
					<td>New Password</td>
					<td><input type="password" name="newPassword"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirmPassword"></td>
				</tr>
				<tr>
					<td><input type="reset" name="clearall" value="Clear All"></td>
					<td><input type="submit" name="submit" value="Change Password"></td>
					<button>
						<a href="teacherWelcome.php" style="text-decoration: none; color: black;">Go Back</a>
					</button>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
<?php
	}else{
		header("location:login.php");
	}
?>