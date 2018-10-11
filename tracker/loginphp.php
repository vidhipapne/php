<!DOCTYPE html>
<html>
	<head>
		<title> login form </title>
			<link rel="stylesheet" type="text/css" href="csstest.css">
	</head>
	<body>
		<?php
			$username=$_POST['name'];
			$password=$_POST['password'];
			$server='localhost';
			$user='root';
			$pass='';
			$db='tracker';
			$conn=mysqli_connect($server,$user,$pass,$db);
			if(!$conn){
				echo "connection not possible at the moment";
			} 
			$sql="SELECT * FROM user_info WHERE username='$username' and password='$password'";
			$result=mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$count=mysqli_num_rows($result);
			if($count == 1) {
         		$_SESSION['login_user'] = $username;
         		echo "<p align="."center".">You are successfully logged in</p>";
         	}else {
         		echo "<p align="."center".">Invalid username or password</p>";
      		}
			// if(isset($count)){
			// 	echo "<p align="."center".">You are successfully logged in</p>";
			// }else{
			// 	echo "<p align="."center".">Invalid username or password</p>";
			// }
		?>
	</body>
</html>
