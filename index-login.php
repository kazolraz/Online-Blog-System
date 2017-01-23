<?php
//including the database connection file
include_once("config.php");

    session_start();
    $name = $_SESSION['fullname'] ;
//fetching data in descending order (lastest entry first)
$query = mysql_query("SELECT * FROM post_add ORDER BY id DESC ");


?>

<html>

	 
<head>	
	<title>Homepage</title>
	<link rel="stylesheet" href="css.css">
     <style>
   table {border-collapse:collapse; table-layout:fixed; width:100%;}
   table td {border:solid 1px #fab; width:100px; word-wrap:break-word;}
   </style>

</head>

<body>

<table align='left' style="background-color:blue;">

<h2 align="center" > <?php echo "$name" ?></h2><br>
    

   
     
     
    




</table>
<table >

    <a align="center" href='UserHome.php'>Back</a>  <br/><br>

  <a align="left" href='logout.php'>Logout</a> 
  


</table>



	<table align="center" width='100%' border=2>
	<body style="background-color:#3EA99F;">
	<h1>Recent Posts:</h1>
	<?php 
	while($res = mysql_fetch_array($query)) { 
	

		
  
        echo "<form>";
          
        echo "<table align='center' width='90%' border='12' bordercolor=#B5EAAA>";
		 
		
     
         
		
		echo "<td colspan='1'>"."<b>".$res['title']."</b>";
        echo "<b>"."           |           ";
        echo "<i>"."Written By: ".$res['name']."</i>"."           |           ";
	    echo "on ".$res['dateposted']." " ;
	    echo "at  " .$res['hour']."<br/>";
        echo "<br/>"."<tr>"."<td>".$res['post']."</td>"."</tr>";

        
        $post_id=$res['id'];
	    echo "<tr rowspan='3'>";
		echo "<td><a href='comments.php?postId=$post_id'>Coments</a></td>"."</tr>";
		
		echo "</tr>";
	
			
		echo '</table>';
		  echo "<form>";
		
		
	
	
	
		echo "<hr>";
	
		
       
		
				
	}
	?>
	</table>
	
</body>
</html>

