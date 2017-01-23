<?php
session_start();

if(!isset($_SESSION['username']))
{
 header("Location: SignIn.php");
}
else if(isset($_SESSION['username'])!="")
{
 session_destroy();
 unset($_SESSION['username']);
 header("Location: index.php");
}

?>

