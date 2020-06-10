<?php
	include('dbConnection.php');
	$fullname = $_POST['fullname'];
	$subject = $_POST['subject'];
	$department = $_POST['department'];
	/*echo "$fullname";
	echo "$grade";
	echo "$id";*/
	if ($fullname != null && $subject != null) {
		$query = "SELECT * FROM teacher WHERE fullname='$fullname' and subject='$subject' or department='$department'";	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: orange;
			font-family: sans-serif;
		}
		table{
			margin-top: -575px;
			margin-left: 550px;
			font-size: 20px;
			width: 500px;
			height: 500px;
		}
		input{
			font-size: 20px;
		}
		.image{
			margin-top: 100px;
			margin-left: 100px;
			border-radius: 50px;
		}
	</style>
</head>
<body>
	
		<?php 
				$run = mysqli_query($con, $query);
				if ($run) {
					if ($data = mysqli_fetch_assoc($run)) {
			?>
			<img src="images/teacher/<?php echo $data['image']?>" class="image" style="height: 500px; height: 500px;">
		<center>
			<table border="1px;">
				<caption><h2><?php echo $data['fullname']?> Details</h2></caption>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id" value="<?php echo $data['id']?>" disabled></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="fullname" value="<?php echo $data['fullname']?>" disabled></td>
				</tr>
				<tr>
					<td>DOB</td>
					<td><input type="text" name="dob" value="<?php echo $data['dob']?>" disabled></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><input type="radio" name="gender" value="male" <?php echo ($data['gender']=='male')?"checked":""?> disabled>Male
						<input type="radio" name="gender" value="female" <?php echo ($data['gender']=='female')?"checked":""?> disabled>Female
					</td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address" value="<?php echo $data['address']?>" disabled></td>
				</tr>
				<tr>
					<td>Subject</td>
					<td><input type="text" name="subject" value="<?php echo $data['subject']?>" disabled></td>
				</tr>
				<tr>
					<td>Department</td>
					<td>
						<select name="department">
							<option value="finance" <?php echo ($data['department']=='finance')?"checked":"disabled"?>>Finance</option>
							<option value="it" <?php echo ($data['department']=='it')?"checked":"disabled"?>>IT</option>
							<option value="teacher" <?php echo ($data['department']=='teacher')?"checked":"disabled"?>>Teacher</option>
							<option value="administrator" <?php echo ($data['department']=='administrator')?"checked":"disabled"?>>Administrator</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?php echo $data['password']?>" disabled></td>
				</tr>
			</table>
			<button style="width: 200px; height: 50px; font-size: 25px; border-radius: 50px 0px 50px 0px; margin-left: 850px; margin-top: 50px;">
				<a href="welcome.php" style="text-decoration: none;">Go Back</a>
			</button>
			<?php
					}
				}
			?>
	</center>
</body>
</html>
<?php
	}else{
		header("location:welcome.php");
	}
?>