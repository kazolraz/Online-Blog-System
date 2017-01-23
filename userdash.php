<?php
//including the database connection file
include_once("config.php");


//fetching data in descending order (lastest entry first)
$query = mysql_query("SELECT * FROM post_add ORDER BY id DESC");


?>

<html>
<?php   

	 
     session_start();
    $ptitle = $_SESSION['fullname'] ;
    
 ?>
	 
<head>	
	<title>Homepage</title>
	<link rel="stylesheet" href="css.css">
     <style>
   table {border-collapse:collapse; table-layout:fixed; width:100%;}
   table td {border:solid 1px #fab; width:100px; word-wrap:break-word;}
   </style>

</head>

<body>

<table align="center" style="background-color:blue;">

<h1 align="center" > WELCOME  <?php echo "$ptitle" ?></h1><br>




</table>
<table align ="center" >
 <tr>
  <td><a align="center" href='createPost.php'>Create new post</a></td>   
     
</tr>
</table>
<table align="right">
<tr>
  <td><a align="left" href='logout.php'>Logout</a> </td> 
  
</tr>

</table>



	<table align="center" width='100%' border=2>
	<body style="background-color:#77BFC7;">
	<h1>Recent Posts:</h1>
	<?php 
	while($res = mysql_fetch_array($query)) { 
	

		
  
        echo "<form>";
          
        echo "<table align='center' width='90%' border='12' bordercolor=#B5EAAA>";
		 
		
     
         
		
		echo "<td colspan='1'>"."<b>".$res['title']."</b>"."<br/>";
        echo "<i>"."Written By: ".$res['name']."</i>"."<br/>";
	    echo "on ".$res['dateposted']." " ;
	    echo "at  " .$res['hour']."<br/>";
        echo "<br/>"."<tr>"."<td>".$res['post']."</td>"."</tr>";

        
        $post_id=$res['id'];
	    echo "<tr rowspan='3'>";
		echo "<td><a href='comments.php?postId=$post_id'>Coments</a></td>"."</tr>";
		echo "<td><a href=\"editPost.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "</tr>";
	
			
		echo '</table>';
		  echo "<form>";
		
		
	
	
	
		echo "<hr>";
	
		
       
		
				
	}
	?>
	</table>
	
</body>
</html>

