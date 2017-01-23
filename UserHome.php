<?php
//including the database connection file
include_once("config.php");

    session_start();
    $name = $_SESSION['fullname'] ;
//fetching data in descending order (lastest entry first)
$query = mysql_query("SELECT * FROM post_add where name='$name' ORDER BY id DESC ");


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

<table style="background-color:blue;">

<h1 align="center" > WELCOME  <?php echo "$name" ?></h1><br>
    

    </tr>
     
     
    




</table>
<table >

  <a align="center" href='createPost.php'>Create new post</a>  <br/>

<a align="center" href='index-login.php'>View all post</a>  <br/><br/>


 <a align="left" href='logout.php'>Logout</a> 
  


</table>



	<table align="center" width='100%' border=2>
	<body style="background-color:#77BFC7;">
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

