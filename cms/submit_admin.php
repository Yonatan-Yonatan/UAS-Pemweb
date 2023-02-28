<?php
  session_start();
  require_once "connection.php";

  $depan=$_POST['nama_depan'];
  $belakang=$_POST['nama_belakang'];
  $email= $_POST['email'];
  $password = md5(trim($_POST['password']));

  $sSQL=" insert into tbladmin (nama_depan,nama_belakang,email,password)
		  values ('$depan','$belakang','$email','$password')";
		  
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