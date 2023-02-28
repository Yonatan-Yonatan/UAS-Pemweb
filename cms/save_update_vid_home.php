<?php
	session_start();
   	if (empty($_SESSION['isLoggedin']))
    {
	    header("location: logout.php");
 	}
	require_once "connection.php";
	include "fungsi.php";
	
	$vid_file_old="";
	$vid_file="";
	
	
	if (isset($_POST['vid_id']))
	{
		$vid_id = $_POST['vid_id'];
	}	
	if (isset($_POST['vid_title']))
    {	
		$vid_title = $_POST['vid_title'];
	}	
	if (isset($_POST['promo_detail']))	
	{
		$vid_detail = $_POST['vid_detail'];
	}	
	if (isset($_POST['vid_file']))	
	{
		$vid_file_old = $_POST['vid_file'];	
	}	
	if (isset($_POST['vid_status']))	
	{
		$vid_status = $_POST['vid_status'];
	}	
	// cek apakah ada file yang mau diupload atau tidak 
	
	$not_ok=1;
	$vid_file="";
	if ($_FILES['fileMP4ToUpload']['name']!='')
	{
	    $target_dir="images/";	
		$message= UploadFilesFromForm($target_dir, "v", "fileMP4ToUpload");	
		
		if (substr($message,0,3)!='***')
		{     
              $not_ok=0;
			  echo "<a href='list_vid_home.php'>Back </a>";
		      die("<script>alert('".$message."');</script>");
		}
		
		if (!empty($vid_file_old))
		{
		      unlink("images/".$vid_file_old);
		}
		$vid_file=$_FILES['fileMP4ToUpload']['name'];
	}
	
	$sql="";
	$sql=" delete from tblvid_home where vid_id='$vid_id'";
	mysqli_query($conn, $sql) or die ($sql);	 	
	
	$sql="";
	
	if ($vid_file=="")
	{
	   $vid_file=$vid_file_old;
	}
	
	$sql= "INSERT INTO tblvid_home (vid_id,vid_title, vid_detail,vid_file,vid_status)
           VALUES ('$vid_id','$vid_title', '$vid_detail','$vid_file','$vid_status')";
	
	if (mysqli_query($conn, $sql)) 
	{
          header("location: list_vid_home.php");
    }
	else 
	{
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

	mysqli_close($conn);	   
?> 