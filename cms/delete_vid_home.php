<?php
	session_start();
    if (empty($_SESSION['isLoggedin']))
    {
		header("location: logout.php");
	}
	require_once "connection.php";
	
	$vid_id = $_GET['vid_id'];
	$vid_file = trim($_GET['vid_file']);
	if (!empty($vid_file))
	{
	     unlink("../cms/video/".$vid_file);
	}	
	
	//unlink($remove); 
	$sql= " DELETE FROM tblvid_home WHERE vid_id='$vid_id'";
 	if (mysqli_query($conn, $sql)) {
          header("location: list_vid_home.php");
    } 
	else 
	{
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

	mysqli_close($conn);	   
?> 