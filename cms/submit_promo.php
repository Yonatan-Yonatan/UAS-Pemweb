<?php
  session_start();
  require_once "connection.php";

  $id_promo=$_POST['id_promo'];
  $jenjang=$_POST['jenjang_sekolah'];
  $jenis_kursus= $_POST['jenis_kursus'];
  $harga = $_POST['harga'];
  $diskon = $_POST['diskon'];

  $sSQL=" insert into tblpromo (id_promo,jenjang_sekolah,jenis_kursus,harga,diskon)
		  values ('$id_promo','$jenjang','$jenis_kursus','$harga','$diskon')";
		  
  if (mysqli_query($conn,  $sSQL)) 
  {
  	header("location:list_promo.php");
	exit();
  }	
  else
  {
  	echo "Error: " . $sSQL . "<br>" . mysqli_error($conn);	  
  }     	
  mysqli_close($conn); 
?>