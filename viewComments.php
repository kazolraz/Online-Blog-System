
<html>
	<head>
		<title>Comments</title>
	</head>
    <body>
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
         </body>
</html>