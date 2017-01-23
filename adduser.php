<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

include_once("config.php");
   

	
	$fullname = $_POST['fn'];
	$username = $_POST['un'];
	$password = $_POST['pass'];
	$email = $_POST['em'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
   
    
	


  
    

	
	
		
	
	if (empty($fullname) || empty($username) || empty($password) || empty($email) || empty($phone) || empty($address) || empty($dob) ||
        !isset($_POST['gender']) || !isset($_POST['agree'])) {
				
		if(empty($fullname)) {
			echo "<font color='red'>fullname field is empty.</font><br/>";
		}
		
		if(empty($username)) {
			echo "<font color='red'>username field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
        if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($phone)) {
			echo "<font color='red'>Phone field is empty.</font><br/>";
		}
		
		if(empty($address)) {
			echo "<font color='red'>Address field is empty.</font><br/>";
		}
        
       if(empty($dob)) {
			echo "<font color='red'>DOB field empty</font><br/>";
		}
        
         
      
        
        if(!isset($_POST['agree'])) {
			echo "<font color='red'>Please accept our Terms and Condition</font><br/>";
		}
        
        
        if(!isset($_POST['gender'])) {
			echo "<font color='red'>Gender field empty</font><br/>";
		}
    
		
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
    
    else { 
		
		$result = mysql_query("INSERT INTO users(fullname,username,password,email,phone,address,dob) VALUES('$fullname','$username','$password','$email','$phone','$address','$dob')");
				$result = mysql_query("INSERT INTO comment_add(username) VALUES('$username')");
		
		
		echo "<font color='green'>You have registered successfully."; 
		echo "<br/><a href='SignIn.php'>Sign in</a>";
	}

?>
</body>
</html>
