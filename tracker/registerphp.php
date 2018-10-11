<!DOCTYPE html>
<html>
	<head>
		<title> login form </title>
			<link rel="stylesheet" type="text/css" href="csstest.css">
	</head>
	<body>
		<?php 
			$name=$_POST['name'];
			$password=$_POST['password'];
			$server='localhost';
			$user='root';
			$pass='';
			$db='tracker';
			$conn=mysqli_connect($server,$user,$pass,$db);
			if(!$conn){
				echo "connection not possible at the moment";
			}
			else{
				$comm="insert into user_info values('".$name."','".$password."');";
			}
			if(mysqli_query($conn,$comm))
				echo "<p align="."center".">Database updated successfully</p>";
		?>
	</body>
</html>