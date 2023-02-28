<?php
	session_start();
   	if (empty($_SESSION['isLoggedin']))
    {
	    header("location: logout.php");
 	}
	require_once "connection.php";
	include "fungsi.php";
	
	$pic_file_old="";
	$pic_file="";
	
	
	if (isset($_POST['pic_id']))
	{
		$pic_id = $_POST['pic_id'];
	}	
	if (isset($_POST['pic_title']))
    {	
		$pic_title = $_POST['pic_title'];
	}	
	if (isset($_POST['promo_detail']))	
	{
		$pic_detail = $_POST['pic_detail'];
	}	
	if (isset($_POST['pic_file']))	
	{
		$pic_file_old = $_POST['pic_file'];	
	}	
	if (isset($_POST['pic_status']))	
	{
		$pic_status = $_POST['pic_status'];
	}	
	// cek apakah ada file yang mau diupload atau tidak 
	
	$not_ok=1;
	$pic_file="";
	if ($_FILES['fileImageToUpload']['name']!='')
	{
	    $target_dir="images/";	
		$message= UploadFilesFromForm($target_dir, "i", "fileImageToUpload");	
		
		if (substr($message,0,3)!='***')
		{     
              $not_ok=0;
			  echo "<a href='list_pic_promo.php'>Back </a>";
		      die("<script>alert('".$message."');</script>");
		}
		
		if (!empty($pic_file_old))
		{
		      unlink("images/".$pic_file_old);
		}
		$pic_file=$_FILES['fileImageToUpload']['name'];
	}
	
	$sql="";
	$sql=" delete from tblpic_promo where pic_id='$pic_id'";
	mysqli_query($conn, $sql) or die ($sql);	 	
	
	$sql="";
	
	if ($pic_file=="")
	{
	   $pic_file=$pic_file_old;
	}
	
	$sql= "INSERT INTO tblpic_promo (pic_id,pic_title, pic_detail,pic_file,pic_status)
           VALUES ('$pic_id','$pic_title', '$pic_detail','$pic_file','$pic_status')";
	
	if (mysqli_query($conn, $sql)) 
	{
          header("location: list_pic_promo.php");
    }
	else 
	{
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

	mysqli_close($conn);	   
?> 