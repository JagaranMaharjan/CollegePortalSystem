<?php
	$con = mysqli_connect('localhost','root','','collegesystem');
	if ($con) {
		//echo "Connection to the localserver database successful";
	}else{
		echo "Connection to the localserver database unsuccessful";
	}
?>