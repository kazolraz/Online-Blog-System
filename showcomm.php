<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM post_add ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
	<link rel="stylesheet" href="css.css">

</head>

<body>

	<table align="center" width='80%' border=0>
     
	<tr>
	     <th>title</th>
		<th>name</th>
		<th>date</th>
		<th>post</th>
		
	</tr>
	<?php 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['title']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['dateposted'].$res['hour']."</td>";
		echo "<td>".$res['post']."</td>";
       
		
				
	}
	?>
	</table>
                    <table  align="right" width='5%' border=0>
	                <tr> <td><a href="logout.php?logout">Logout</a></td></tr>
					</table>
</body>
</html>
