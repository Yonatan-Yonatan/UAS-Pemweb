<?php
  require_once "connection.php";
  session_start();
  $nama=$_POST['nama'];
  $no_hp=$_POST['no_hp'];
  $email= $_POST['email'];
  $jenis_kelamin= $_POST['jenis_kelamin'];
  $jenjang_sekolah= $_POST['jenjang_sekolah'];
  $jenis_kursus= $_POST['jenis_kursus'];
  $jam_kursus= $_POST['jam_kursus'];
  
  $sSQL=" insert into tbldaftar (nama,no_hp,email,jenis_kelamin,jenjang_sekolah,jenis_kursus,jam_kursus)
		  values ('$nama','$no_hp','$email','$jenis_kelamin','$jenjang_sekolah','$jenis_kursus','$jam_kursus')";
	

 if (mysqli_query($conn,  $sSQL)) {
	    header("location:daftar.php");
		exit();
 }	
 else
       echo "Error: " . $sSQL . "<br>" . mysqli_error($conn);	  		  
		   
mysqli_close($conn); 


?>