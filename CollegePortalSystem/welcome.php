<?php
	session_start();
	if ($_SESSION['username']!=null) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome To Admin</title>
	<style type="text/css">
		body{
			background-color: orange;
			font-family: sans-serif;
		}
		.searchStudentForm{
			margin-top: 50px;
			margin-left: -350px;
		}

		.searchTeacherForm{
			margin-top: -170px;
			margin-left: 350px;
		}
	</style>
</head>
<body>
	<center>
		<table name="table1" style="margin-top: 200px;">
			<tr>
				<td><button><a href="addTeacher.php" style="text-decoration: none; color: black;">Add Teacher</a></button></td>
				<td><button><a href="addStudent.php" style="text-decoration: none; color: black;">Add Student</a></button></td>
				<td><button><a href="listStudentData.php" style="text-decoration: none; color: black;">List Students Data</a></button></td>
				<td><button><a href="listTeacherData.php" style="text-decoration: none; color: black;">List Teachers Data</a></button></td>
				<td><button><a href="logout.php" style="text-decoration: none; color: black;">Logout</a></button></td>
			</tr>
		</table>

		<form method="POST" action="searchStudentData.php" class="searchStudentForm">
			<table name="table2">
				<caption align="center"><h3>Find Student</h3></caption>
				<tr>
					<td>Name</td>
					<td><input type="text" name="fullname"></td>
				</tr>
				<tr>
					<td>Grade</td>
					<td><input type="text" name="grade"></td>
				</tr>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td><input type="reset" name="clear" value="Clear All"></td>
					<td><input type="submit" name="submit" value="Search Student"></td>
				</tr>
			</table>
		</form>

		<form method="POST" action="searchTeacherData.php" class="searchTeacherForm">
			<table name="table2">
				<caption align="center"><h3>Find Teacher</h3></caption>
				<tr>
					<td>Name</td>
					<td><input type="text" name="fullname"></td>
				</tr>
				<tr>
					<td>Subject</td>
					<td><input type="text" name="subject"></td>
				</tr>
				<tr>
					<td>Department</td>
					<td><input type="text" name="department"></td>
				</tr>
				<tr>
					<td><input type="reset" name="clear" value="Clear All"></td>
					<td><input type="submit" name="submit" value="Search Teacher"></td>
				</tr>

			</table>
		</form>
		
	<!--<div id="studentDetails" style="display:None">
		<table>
			<caption><h3>Student Details</h3></caption>
			<tr>
					<td>Select Image</td>
					<td><input type="file" name="image"></td>
				</tr>
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="fullName"></td>
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
					<td>Grade</td>
					<td><input type="text" name="grade"></td>
				</tr>
				<tr>
					<td>Course Type</td>
					<td>
						<select name="courseType">
							<option value="java">Java</option>
							<option value="python">Python</option>
							<option value="php">PHP</option>
							<option value="c++">C++</option>
						</select>
					</td>
				</tr>
		</table>
	</div>

		<table id="teacherDetails">
			<caption><h3>Teacher Details</h3></caption>
			<tr>
					<td>Select Image</td>
					<td><input type="file" name="image"></td>
				</tr>
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="fullName"></td>
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
		</table>-->
	</center>



	<!--<script>
		function myFunction() {
		    document.getElementById("studentDetails").style.display="block";
		}
	</script>-->
</body>
</html>
<?php
	}else{
		header('location:login.php');
	}
?>