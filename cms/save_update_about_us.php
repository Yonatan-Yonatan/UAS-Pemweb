<?php
	require_once "connection.php";
  	session_start();
  	$about_id = $_POST['about_id'];
  	$about_message=$_POST['about_message'];
  	$sSQL=" update tblabout set about_message='$about_message' where about_id='$about_id'";
	
 	if (mysqli_query($conn,  $sSQL)) 
	{
		header("location:list_about_us.php");
		exit();
 	}	
 	else
	{
       echo "Error: " . $sSQL . "<br>" . mysqli_error($conn);	  		  
	}	   
	mysqli_close($conn); 
?>