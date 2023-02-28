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

<title>List About Us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
	function konfirmasi()
	{
	 	if (!confirm('Yakin ingin menghapus data ini ?'))
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

<body>

<div class="container">
	<h2><?php echo "<u>List About Us</u>";?></h2><br>
    <a href="create_about_us.php"><button type="button" class="btn btn-warning">Add About Us</button></a><br><br>
 	<table class='table table-hover'>
    	<thead>
      		<tr>
	    		<th>About Us ID</th> 
        		<th>About Us Message</th>
				<th>Action</th>
      		</tr>
    	</thead>
    <tbody>
	
   	<?php 
    	$sSQL="";
      	$sSQL="select * from tblabout order  by about_id";
		$result=mysqli_query($conn, $sSQL);
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row=mysqli_fetch_assoc($result))
			{
				$about_id = $row['about_id'];
				$about_message = $row['about_message']
	?>		
				   			   
	<tr>
		<td><?php echo $about_id;?></td>
        <td><?php echo $about_message;?></td>
		<td><?php echo "<a href='update_about_us.php?about_id=$about_id'>UPDATE</a> | 
						<a href='delete_about_us.php?about_id=$about_id' onclick='return konfirmasi();'>DELETE</a>"; ?> </td>
    </tr>
	<?php	   
			}
		} 
   ?>
</div>
</body>
</html>
