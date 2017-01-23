<?php 

$conn = mysql_connect("localhost","root","") 
			or die("cannot connected");


@mysql_select_db("blog",$conn);
 
 function SignIn() 
 { session_start();
   
    
    

   if(!empty($_POST['username'])) 
  { 
      $query = mysql_query("SELECT * FROM users where username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysql_error());
      	  
      $row = mysql_fetch_array($query) or die(mysql_error()); 
 if(!empty($row['username']) AND !empty($row['password'])) 
 { 
       $_SESSION['username'] = $row['password'];
       $fname=$row['fullname'];
       $_SESSION['fullname'] = $fname ;
	   
	   if($fname == 'Admin')
	   {
		  header("Location:adminHome.php");  
	   }
	   
	   else
	   {
		 header("Location:UserHome.php");  
		   
	   }
	     
			 
	   
     
	   

} 
 
   
  }	 
 } 
		 if(isset($_POST['btn-login'])) 
		 { 
	 SignIn(); 
	 } 
 ?>