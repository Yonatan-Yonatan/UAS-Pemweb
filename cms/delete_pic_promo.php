<?php
	session_start();
    if (empty($_SESSION['isLoggedin']))
    {
		header("location: logout.php");
	}
	require_once "connection.php";
	
	$pic_id = $_GET['pic_id'];
	$pic_file = trim($_GET['pic_file']);
	if (!empty($pic_file))
	{
	     unlink("../cms/images/".$pic_file);
	}	
	
	//unlink($remove); 
	$sql= " DELETE FROM tblpic_promo WHERE pic_id='$pic_id'";
 	if (mysqli_query($conn, $sql)) {
          header("location: list_pic_promo.php");
    } 
	else 
	{
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

	mysqli_close($conn);	   
?> 