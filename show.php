<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
	<link rel="stylesheet" href="css.css">

</head>

<body>

	<table align="center" width='80%' border=0>
     
	<tr>
		<th>Fullname</th>
		<th>Username</th>
		<th>Password</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>DOB</th>
		<th>Gender</th>
	   
	</tr>
	<?php 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['fullname']."</td>";
		echo "<td>".$res['username']."</td>";
		echo "<td>".$res['password']."</td>";
        echo "<td>".$res['email']."</td>";	
        echo "<td>".$res['phone']."</td>";	
        echo "<td>".$res['address']."</td>";	
        echo "<td>".$res['dob']."</td>";	
        echo "<td>".$res['gender']."</td>";		
		
		
				
	}
	?>
	</table>
                    <table  align="right" width='5%' border=0>
	                <tr> <td><a href="logout.php?logout">Logout</a></td></tr>
					</table>
</body>
</html>
