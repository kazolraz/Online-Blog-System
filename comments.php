<?php   
     session_start();
    
    if(isset($_SESSION['fullname']) && !empty($_SESSION['fullname']))
    {
         $ptitle = $_SESSION['fullname'] ;
    }
    else
    {
        die("Please Login to Comment");
    }
    
?>
<html>
	<head>
		<title>Comments</title>
	</head>
	
	<body>
		<form method="POST">
			<table>
				<tr>
					<td>Enter Comment</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="txtEnterComment" placeholder="Place your comment"/>
						
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="btnSmtComment" value="SUBMIT"/></td>
				</tr>
			</table>
		</form>
		
		<?php // Posting comment 
			if(isset($_POST['txtEnterComment']) && !empty($_POST['txtEnterComment']))
			{
				$cmt=htmlentities($_POST['txtEnterComment']);
				$postIdNumber=$_REQUEST['postId'];
				
				require_once("config.php");
				$sqlAddCmt="INSERT INTO comments (cmt_postid,cmt_user,cmt_comment) VALUES('$postIdNumber','$ptitle','$cmt')";
				if(mysql_query($sqlAddCmt))
				{
					$postIdN=$postIdNumber;
					header("Location:comments.php?postIdNo=$postIdN");
				}
				
			}
		?>
		
		<?php // Displaying comments 
			include("config.php");
			
			if(isset($_REQUEST['postIdNo']) && !empty($_REQUEST['postIdNo']))
			{
				$_postId=$_REQUEST['postIdNo'];
			}
			else
			{
				$_postId=$_REQUEST['postId'];
			}
			$sqlDisplayCmt="SELECT * FROM comments WHERE cmt_postid='$_postId'";
			$str="";
			if($cmtDisplay=mysql_query($sqlDisplayCmt))
			{
				while($cmtRowsDis=mysql_fetch_array($cmtDisplay))
				{
					$id_cmt=$cmtRowsDis['cmt_postid'];
					$user_cmt=$cmtRowsDis['cmt_user'];
					$_cmt=$cmtRowsDis['cmt_comment'];
					
					$str.="<tr><td><strong>$user_cmt</strong><br/>$_cmt</td></tr>";
				}
			}
		
		?>
		
		<table border='1px'>
			<?php echo $str;?>
            
		</table>
        
        <br><br><a href="UserHome.php">Back to Main Page</a>
	</body>
</html>
