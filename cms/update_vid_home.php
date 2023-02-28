<?php
   	session_start();
   	if (!isset( $_SESSION['isLoggedin']))
   	{
   		header("location:logout.php");
   	} 
	require_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Video Home</title>
<meta charset="utf-8">
<meta name="viewport" promo="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
<script>
	function konfirmasi()
	{
	 	if (!confirm('Yakin simpan perubahan data ini ?'))
		{
			return false;
        }
		else
		{ 
			return true;		
		}
	}
  
</script>
</head>

<?php
	$vid_id = $_GET['vid_id'];
	$sql = "SELECT * FROM tblvid_home where vid_id='$vid_id' order by vid_id desc  limit 1 ";
	$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
	{
	     $row=mysqli_fetch_assoc($result);
	     $vid_title = $row['vid_title'];
		 $vid_detail = $row['vid_detail'];
		 $vid_file = $row['vid_file'];
		 $vid_status = $row['vid_status'];
	}
?> 

<body>
<div class="container">
	<h3>Edit Video</h3><br>
	<form action="save_update_vid_home.php" method="post" onSubmit="return konfirmasi()" enctype="multipart/form-data">
	<div class="form-group">
		<div class="col-sm-12">
			<label for="vid_id">Video ID:</label>
    		<input type="text" class="form-control" placeholder="Enter Video ID" id="vid_id" name="vid_id" value="<?php echo $vid_id;?>" readonly>
		</div>
  	</div>
 	<div class="form-group">
    	<div class="col-sm-12">
        	<label for="vid_title">Video Title:</label>
        	<input type="text" class="form-control" placeholder="Enter Video Title" id="vid_title" name="vid_title" value="<?php echo $vid_title;?>" required>
		</div>
  	</div>
  	<div class="form-group">
    	<div class="col-sm-12">
    		<label for="vid_detail">Video Detail </label>
   			<textarea class="form-control" placeholder="Enter Video Detail" id="vid_detail" name="vid_detail"> <?php echo $vid_detail;?></textarea>
		</div>
  	</div>
  	<div class="form-group">
    	<div class="col-sm-12">
    		<label for="vid_file">Select File Image to Upload</label>
          	<p style="color:red" font-size:14px"><?php echo $vid_file;?></p>  	
		  	<input type="hidden" name="vid_file" value="<?php echo $vid_file;?>">
		    <input type="file" name="fileMP4ToUpload" id="fileMP4ToUpload" class="form-control">
 		</div>
  	</div>
  	<div class="form-group">
    	<div class="col-sm-12">
    		<label for="vid_status">Video Status</label>
	  		<?php if ($vid_status=='0')
	        {
			?>		
			<input type="radio" id="aktif" name="vid_status" value="0" checked>
			<label for="aktif">Aktif</label>
 			<input type="radio" id="nonaktif" name="vid_status" value="1" >
			<label for="nonaktif">Nonaktif</label>
			<?php 
		     }	
			 else
			 {
			?>
			<input type="radio" id="aktif" name="vid_status" value="0" >
			<label for="aktif">Aktif</label>
 			<input type="radio" id="nonaktif" name="vid_status" value="1" checked>
			<label for="nonaktif">Nonaktif</label>
			<?php
			 }
			?>		
	   	</div>
  	</div>
  	<div class="form-group">
  		<div class="col-sm-12"> 
  			<button type="submit" class="btn btn-warning">Submit</button>
   			<a href="list_vid_home.php"><button type="button" class="btn btn-warning">Cancel</button></a>
  		</div>
  	</div>
	</form> 
</div>
</body>
</html>
