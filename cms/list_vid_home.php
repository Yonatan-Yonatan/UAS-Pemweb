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

<title>List Video Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
<script>
	function konfirmasi()
	{
	 	if (!confirm('Yakin hapus data ini ?'))
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
<div class="container"><br>
	<h2>List Video Home  </h2><br>
     <a href="create_vid_home.php"><button type="button" class="btn btn-warning">Add Video</button></a><br><br>
    <table class="table table-hover">
    	<thead>
        	<tr>
          		<th>Video ID</th>
           		<th>Video Title</th>
				<th>Video Detail</th>
           		<th>Video File</th>
         		<th>Video Status</th>
         		<th>Action</th>
         	</tr>
      	</thead>
		<tbody>
    	<?php
    		$sql=" select `vid_id`,`vid_title`,`vid_detail`,`vid_file`,
      				if (`vid_status`= 0,'Aktif','Nonaktif') as vid_sts from tblvid_home order by vid_id ";
    
     	   	$result = mysqli_query($conn, $sql);
         	if (mysqli_num_rows($result) > 0) 
		 	{
         		while($row = mysqli_fetch_assoc($result)) 
				{
            		echo "<tr>";
                	echo "<td>$row[vid_id]</td>";
                	echo "<td>$row[vid_title]</td>";
                	echo "<td>$row[vid_detail]</td>";
					echo "<td>$row[vid_file]</td>";
                	echo "<td>$row[vid_sts]</td>";
                	echo "<td><a href='update_vid_home.php?vid_id=$row[vid_id]' class='text-black'>Update</a> |
							  <a href='delete_vid_home.php?vid_id=$row[vid_id]&vid_file=$row[vid_file]' class='text-black' onclick='return konfirmasi();'>Delete</a></td>";
         			echo "</tr>";
				}
         	}
         	mysqli_close($conn);
		?>
   		</tbody>
	</table>
</div>
   
</body>
</html>
     
