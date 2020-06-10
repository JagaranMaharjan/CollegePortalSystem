<?php
	session_start();
	if (isset($_SESSION['username'])) {
		header("location:welcome.php");
	}else{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style type="text/css">
		body{
			background-color: orange;
			font-family: sans-serif;
		}
		form{
			margin-top: 170px;
		}
	</style>
</head>
<body>
	<center>
		<form method="POST" action="_login.php">
			<table>
				<caption><h2>User Login Form</h2></caption>
				<tr>
					<td></td>
					<td><img src="image.jfif" style="width: 100px; height: 100px; border-radius: 100%;"></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td>
						<select name="userType" id="userType">
							<option value="admin">Admin</option>
							<option value="teacher">Teacher</option>
							<option value="student">Student</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" id="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="checkbox" name="rememberMe" value="true">Remember Me</td>
				</tr>
				<tr>
					<td><input type="reset" name="reset" value="Clear All"></td>
					<td><input type="submit" name="submit" value="Log In"></td>
				</tr>
			</table>

			<?php
				if (isset($_COOKIE['userType']) && isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
					$userType = $_COOKIE['userType'];
					$username = $_COOKIE['username'];
					$password = $_COOKIE['password'];
					echo "<script>
						document.getElementById('userType').value='$userType';
						document.getElementById('username').value='$username';
						document.getElementById('password').value='$password';
					</script>";
				}
			?>
		</form>
	</center>
</body>
</html>
<?php
	}
?>