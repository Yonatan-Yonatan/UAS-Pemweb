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
<title>Enter New Video Home</title>
<meta charset="utf-8">
<meta name="viewport" promo="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
	function konfirmasi()
	{
	 	if (!confirm('Yakin ingin menyimpan data ini ?'))
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
	
	$sql = "SELECT * FROM tblvid_home order by vid_id desc  limit 1 ";
	$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
	{
	     $row=mysqli_fetch_assoc($result);
	     $vid_id = $row['vid_id']+1; 
	}
	else 
	{
	     $vid_id = 1;
	}
?> 

<body>
<div class="container border ">
<h3>Enter Video </h3><br>
<form action="save_vid_home.php" method="post" onSubmit="return konfirmasi()" enctype="multipart/form-data">
	<div class="form-group">
		<div class="col-sm-12">
			<label for="vid_id">Video ID:</label>
    		<input type="text" class="form-control" placeholder="Enter Video Id" id="vid_id" name="vid_id" value="<?php echo $vid_id;?>" readonly>
		</div>
	</div>
  	<div class="form-group">
  		<div class="col-sm-12">
    		<label for="vid_title">Video Title:</label>
        	<input type="text" class="form-control" placeholder="Enter Video Title" id="vid_title" name="vid_title" required>
		</div>
  	</div>
  	<div class="form-group">
    	<div class="col-sm-12">
    		<label for="vid_detail">Video Detail </label>
   			<textarea class="form-control" placeholder="Enter Video Detail" id="vid_detail" name="vid_detail" ></textarea>
		</div>
  	</div>
  	<div class="form-group">
  		<div class="col-sm-12">
    		<label for="file">Select File MP4 to Upload</label>
     		<input type="file" name="fileMP4ToUpload" id="fileMP4ToUpload" class="form-control" required>
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
