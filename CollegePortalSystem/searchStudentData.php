<?php
	include('dbConnection.php');
	$fullname = $_POST['fullname'];
	$grade = $_POST['grade'];
	$id = $_POST['id'];
	/*echo "$fullname";
	echo "$grade";
	echo "$id";*/
	if ($fullname != null && $grade != null) {
		$query = "SELECT * FROM student WHERE fullname='$fullname' and grade='$grade' or id='$id'";	
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
			margin-left: 200px;
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
			<img src="images/student/<?php echo $data['image']?>" class="image" style="height: 500px; height: 500px;">
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
					<td>Grade</td>
					<td><input type="text" name="grade" value="<?php echo $data['grade']?>" disabled></td>
				</tr>
				<tr>
					<td>Course Type</td>
					<td>
						<select name="courseType">
							<option value="java" <?php echo ($data['courseType']=='java')?"checked":"disabled"?>>Java</option>
							<option value="python" <?php echo ($data['courseType']=='python')?"checked":"disabled"?>>Python</option>
							<option value="php" <?php echo ($data['courseType']=='php')?"checked":"disabled"?>>PHP</option>
							<option value="c++" <?php echo ($data['courseType']=='c++')?"checked":"disabled"?>>C++</option>
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