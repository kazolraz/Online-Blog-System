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
	$gender = $_POST['gender'];
	
	
		
	
	if(empty($username) || empty($password) || empty($email)) {
				
		if(empty($username)) {
			echo "<font color='red'>Username field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		
		$result = mysql_query("INSERT INTO users(fullname,username,password,email,phone,address,dob,gender) VALUES('$fullname','$username','$password','$email','$phone','$address','$dob','$gender')");
				$result = mysql_query("INSERT INTO comment_add(username) VALUES('$username')");
		
		
		echo "<font color='green'>Data added successfully."; 
		echo "<br/><a href='Sign-In.html'>Sign in</a>";
	}

?>
</body>
</html>
