<?php
//including the database connection file
include_once("config.php");


//fetching data in descending order (lastest entry first)
$query = mysql_query("SELECT * FROM post_add ORDER BY id DESC");


?>

<html>
<head>	
	<title>Homepage</title>
	<link rel="stylesheet" href="css.css">

</head>

<body>

<table align="center" style="background-color:blue;">

<h1 align="center" > WELCOME TO OUR BLOG </h1>

</table>
    
 <table align="right">
<tr>
  <td><a align="left" href='Sign-In.html'>Sign in</a> </td> 
  
</tr>
<tr>
  <td><a align="left" href='reg.php'>New Here!!!Sign up</a></td>   
     
</tr>
</table>


	<table align="center" width='100%' border=2>
	<body style="background-color:#77BFC7;">
	<h1>Recent Posts:</h1>
	<?php 
	while($res = mysql_fetch_array($query)) { 
	

		
  

          
        echo "<table align='center' width='90%' border='12' bordercolor=#B5EAAA>";
		 
		
     
	
		echo "<tr>";
	
		echo "<td colspan='1'>"."<b>".$res['title']."</b>"."<br/>";
		
  echo "<i>"."Written By: ".$res['name']."</i>"."<br/>";
	    echo "on ".$res['dateposted']." " ;
	    echo "at  " .$res['hour']."<br/>";
        echo "<br/>".$res['post'];
		echo "</tr>";
        
       
	
			
		echo '</table>';
		
		
	
	
	
		echo "<hr>";
	
		
       
		
				
	}
	?>
	</table>
	
</body>
</html>

