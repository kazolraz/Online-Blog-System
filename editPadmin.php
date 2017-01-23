<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
    $title = $_POST['title'];

	$post = $_POST['post'];

   
	
	// checking empty fields
	if(empty($title) || empty($post) ) {	
			
		if(empty($title)) {
			echo "<font color='red'>Title field is empty.</font><br/>";
		}
		
		if(empty($post)) {
			echo "<font color='red'>post field is empty.</font><br/>";
		}
		
			
	} else {	
		//updating the table
		$result = mysql_query("UPDATE post_add SET title='$title',post='$post' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: adminHome.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM post_add WHERE id=$id");

while($res = mysql_fetch_array($result))
{
	 $title = $res['title'];
	
	$date = date('Y-m-d');
	$post = $res['post'];
	$hour=time('H:i');
}
?>

<?php   
     session_start();
    $fname = $_SESSION['fullname'] ;
    
 ?>

<html>

<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index-login.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editPadmin.php">
		<table>

			<tr> 
				<td>title</td>
				<td><textarea rows="5" cols="100" name='title' id='title' ><?php echo $title;?></textarea></td>
			</tr>
			<tr> 
				<td>post</td>
				<td><textarea rows="15" cols="120" name='post' id='post' ><?php echo $post;?></textarea></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
