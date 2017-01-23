<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$post_id = $_GET['id'];

//deleting the row from table
$result = mysql_query("DELETE from post_add where id=$post_id");

//redirecting to the display page (index.php in our case)
header("Location:UserHome.php");
?>

