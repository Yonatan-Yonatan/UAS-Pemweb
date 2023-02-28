<?php
	require_once "connection.php";
  	session_start();
  	$id_admin = $_POST['id_admin'];
  	$nama_depan=$_POST['nama_depan'];
  	$nama_belakang=$_POST['nama_belakang'];
  	$email= $_POST['email'];
  
  	$sSQL=" update tbladmin set nama_depan='$nama_depan',nama_belakang='$nama_belakang',email='$email'
             where id_admin='$id_admin'";
	
 	if (mysqli_query($conn,  $sSQL)) 
	{
		header("location:list_admin.php");
		exit();
 	}	
 	else
	{
       echo "Error: " . $sSQL . "<br>" . mysqli_error($conn);	  		  
	}	   
	mysqli_close($conn); 
?>