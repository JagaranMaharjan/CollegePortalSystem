<?php
	session_start();
	if ($_SESSION['username']!=null) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add New Teacher</title>
	<style type="text/css">
		body{
			background-color: orange;
			font-family: sans-serif;
		}
		form{
			margin-top: 150px;
		}
	</style>
</head>
<body>
	<center>
		<form method="POST" action="_addTeacher.php" enctype="multipart/form-data">
			<table>
				<caption><h2>Add New Teacher</h2></caption>
				<tr>
					<td>Select Image</td>
					<td><input type="file" name="image"></td>
				</tr>
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="fullname"></td>
				</tr>
				<tr>
					<td>DOB</td>
					<td><input type="text" name="dob"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><input type="radio" name="gender" value="male" checked>Male
						<input type="radio" name="gender" value="female">Female
					</td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address"></td>
				</tr>
				<tr>
					<td>Subject</td>
					<td><input type="text" name="subject"></td>
				</tr>
				<tr>
					<td>Department</td>
					<td>
									<select name="department">
										<option value="finance">Finance</option>
										<option value="it">IT</option>
										<option value="teacher">Teacher</option>
										<option value="administrator">Administrator</option>
									</select>
								</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td><input type="reset" name="reset" value="Clear All"></td>
					<td><input type="submit" name="submit" value="Register New Teacher"></td>
				</tr>
				<tr>
					<td></td>
					<td><button><a href="welcome.php" style="text-decoration: none; color: black;">Go Back</a></button></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
<?php
	}else{
		header('location:login.php');
	}
?>