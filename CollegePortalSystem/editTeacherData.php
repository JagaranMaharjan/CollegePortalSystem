<?php
	session_start();
	if ($_SESSION['username']!=null) {
		include('dbConnection.php');

		$id = $_GET['id'];
		$_SESSION['id'] = $id;
		#echo "$id";
		$image = $_GET['image'];
		$_SESSION['image'] = $image;
		$query = 'SELECT * FROM teacher WHERE id='.$id;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Teacher Data</title>
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
		<?php
			$run = mysqli_query($con, $query);
			if($run){
				?><?php
				if ($data = mysqli_fetch_assoc($run)) {
					?>
					<form method="POST" action="updateTeacherData.php" enctype="multipart/form-data">
						<table>
							<caption><h2><?php echo $data['fullname']?> Details</h2></caption>
							<center><img src="images/teacher/<?php echo $data['image']?>" style="width: 100px; height: 100px; border-radius: 50%;"></center>
							<tr>
								<td>ID</td>
								<td><input type="text" name="id" value="<?php echo $data['id']?>" disabled></td>
							</tr>
							<tr>
								<td>Change Image</td>
								<td><input type="file" name="image"></td>
							</tr>
							<tr>
								<td>Full Name</td>
								<td><input type="text" name="fullname" value="<?php echo $data['fullname']?>"></td>
							</tr>
							<tr>
								<td>DOB</td>
								<td><input type="text" name="dob" value="<?php echo $data['dob']?>"></td>
							</tr>
							<tr>
								<td>Gender</td>
								<td><input type="radio" name="gender" value="male" <?php echo ($data['gender']=='male')?"checked":""?>>Male
									<input type="radio" name="gender" value="female" <?php echo ($data['gender']=='female')?"checked":""?>>Female
								</td>
							</tr>
							<tr>
								<td>Address</td>
								<td><input type="text" name="address" value="<?php echo $data['address']?>"></td>
							</tr>
							<tr>
								<td>Subject</td>
								<td><input type="text" name="subject" value="<?php echo $data['subject']?>"></td>
							</tr>
							<tr>
								<td>Course Type</td>
								<td>
									<select name="department">
										<option value="finance" <?php echo ($data['department']=='finance')?"checked":""?>>Finance</option>
										<option value="it" <?php echo ($data['department']=='it')?"checked":""?>>IT</option>
										<option value="teacher" <?php echo ($data['department']=='teacher')?"checked":""?>>Teacher</option>
										<option value="administrator" <?php echo ($data['department']=='administrator')?"checked":""?>>Administrator</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Password</td>
								<td>
									<input type="password" name="password" value="<?php echo $data['password']?>">
								</td>
							</tr>
							<tr>
								<td><input type="reset" name="reset" value="Clear All"></td>
								<td><input type="submit" name="submit" value="Update Teacher Data"></td>
							</tr>
							<tr>
								<td></td>
								<td><button><a href="listTeacherData.php" style="text-decoration: none; color: black;">Go Back</a></button></td>
							</tr>
						</table>
					</form>
			<?php } ?>	<?php			
			}
		?>
	</center>
</body>
</html>
<?php
	}else{
		header('location:login.php');
	}
?>