<?php 
	$name=$_POST['name'];
	$cgpa=$_POST['cgpa'];
	$server='localhost';
	$user='root';
	$pass='';
	$db='stud_master';
	$conn=mysqli_connect($server,$user,$pass,$db);
	if(!$conn){
		echo "connection not possible at the moment";
	}else{
		$comm1="insert into stud values('".$name."','".$cgpa."');";
	}
	$comm2="select * from stud";
	$result=mysqli_query($conn,$comm2);
	$row = mysqli_fetch_array($result);
	if($result){
		echo "<center>Database updated successfully</center>";
	}
			echo "<table border='1'>
			<tr>
			<th>name</th>
			<th>cgpa</th>
			</tr>";
					while($row = mysqli_fetch_array($result)){
						echo "<tr> <td>" . $row['name'] . "</td>";
						echo "<td>" . $row['cgpa'] . "</td></tr>";
					}
					echo "</table>";
				mysqli_close($conn);
?>