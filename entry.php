<html>
    
 <?php   
     session_start();
    $fname = $_SESSION['fullname'] ;
    
 ?>
<head>
    
    
</head>
    
<body bgcolor=#659EC7>
    
<form method='post' action='addcom.php' >
 
     <?php
    
    echo "$fname";
     ?>

   
     
  
 
  <table  align="right" width='5%' border=0>
	                <tr> <td><a href="logout.php?logout">Logout</a></td></tr>
					</table><br><br>
  <table align="center" bgcolor=#659EC7>
   <tr>
   <td align="center">Title: <input  type='text' name='title' id='title' /></td>
   </tr>
     
    <tr>
   <td align="center">Write Your Post Here:</td>
     </tr>
    
    <tr>
   <td align="center"><br><textarea rows="15" cols="120" name='post' id='post'></textarea></td>   
    </tr>

   <tr>
    <input type='hidden' name='articleid' id='articleid' value='<? echo $_GET["id"]; ?>' />

  <td align="right">
      <input type='submit' value='Submit' /> </td>
       
     
     
  </tr>

 
    
    
    
 </table>
    
    
 </form>
 </body>

</html>



