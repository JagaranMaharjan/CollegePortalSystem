<?php
	session_start();
	if ($_SESSION['username']!=null) {
	include('dbConnection.php');

	$query = 'select * from student';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Data</title>
</head>
<body>
	<center>
		<table border="2px;" style="width: 100%;">
			<caption>
				<button style="margin-left: 1350px;"><a href="welcome.php" style="text-decoration: none;"><h5>Go Back</h5></a></button>
				<h2>Student Data</h2>
			</caption>
			<tr>
				<th>ID</th>
				<th>Image</th>
				<th>Full Name</th>
				<th>Date of Birth</th>
				<th>Gender</th>
				<th>Address</th>
				<th>Grade</th>
				<th>Course Type</th>
				<th>Password</th>
				<th>Option</th>
			</tr>
			<?php 
				$run = mysqli_query($con, $query);
				if ($run) {
					while ($data = mysqli_fetch_assoc($run)) {
			?>
				<tr>
					<td><?php echo $data['id']?></td>
					<td><center><img src="images/student/<?php echo $data['image']?>" style="height: 100px; height: 100px;"></center></td>
					<td><?php echo $data['fullname']?></td>
					<td><?php echo $data['dob']?></td>
					<td><?php echo $data['gender']?></td>
					<td><?php echo $data['address']?></td>
					<td><?php echo $data['grade']?></td>
					<td><?php echo $data['courseType']?></td>
					<td><?php echo $data['password']?></td>
					<td>
						<button style="background-color: orange;">
							<a href="editStudentData.php?id=<?php echo $data['id']?> && image=<?php echo $data['image']?>" style="text-decoration: none; color: black;">Edit</a>
						</button> 
						<button style="background-color: red;">
							<a href="deleteStudentData.php?id=<?php echo $data['id']?> && image=<?php echo $data['image']?>" style="text-decoration: none; color: black;">Delete</a>
						</button> 
					</td>
				</tr>
			<?php
					}
				}
			?>
		</table>
	</center>
</body>
</html>
<?php
	}else{
		header('location:login.php');
	}
?>