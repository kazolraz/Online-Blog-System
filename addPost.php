<html>
<head>
	<title>Add Data</title>
</head>

<body>

<?php
      
     session_start();
     $fname = $_SESSION['fullname'] ;
    
 

include_once("config.php");
   

	$title = $_POST['title'];
	
	$date = date('Y-m-d');
	$post = $_POST['post'];
	$hour=time('H:i');
  
    echo "$fname";
	
	
	
	
		
	
	if(empty($date) || empty($post)) {
				
		/*if(empty($name)) {
			echo "<font color='red'>name field is empty.</font><br/>";
		}*/
		
		if(empty($date)) {
			echo "<font color='red'>date field is empty.</font><br/>";
		}
		
		if(empty($post)) {
			echo "<font color='red'>Post field is empty.</font><br/>";
		}
		
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		
		$result = mysql_query("INSERT INTO post_add(title,name,dateposted,post,hour) VALUES('$title','$fname',now(),'$post',now())");
		
		
		header("Location: UserHome.php");
	}

?>
</body>
</html>

