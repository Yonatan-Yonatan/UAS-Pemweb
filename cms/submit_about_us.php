<?php
  session_start();
  require_once "connection.php";

  $about_message=$_POST['about_message'];
  
  $sSQL=" insert into tblabout (about_message)
		  values ('$about_message')";
		  
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