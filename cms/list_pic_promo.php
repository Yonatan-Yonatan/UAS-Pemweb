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

<title>List Home Picture Promo</title>
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
	<h2>List Home Picture Promo </h2><br>
     <a href="create_pic_promo.php"><button type="button" class="btn btn-warning">Add Picture</button></a><br><br>
    <table class="table table-hover">
    	<thead>
        	<tr>
          		<th>Picture ID</th>
           		<th>Picture Title</th>
				<th>Picture Detail</th>
           		<th>Picture File</th>
         		<th>Picture Status</th>
         		<th>Action</th>
         	</tr>
      	</thead>
		<tbody>
    	<?php
    		$sql=" select `pic_id`,`pic_title`,`pic_detail`,`pic_file`,
      				if (`pic_status`= 0,'Aktif','Nonaktif') as pic_sts from tblpic_promo order by pic_id ";
    
     	   	$result = mysqli_query($conn, $sql);
         	if (mysqli_num_rows($result) > 0) 
		 	{
         		while($row = mysqli_fetch_assoc($result)) 
				{
            		echo "<tr>";
                	echo "<td>$row[pic_id]</td>";
                	echo "<td>$row[pic_title]</td>";
                	echo "<td>$row[pic_detail]</td>";
					echo "<td>$row[pic_file]</td>";
                	echo "<td>$row[pic_sts]</td>";
                	echo "<td><a href='update_pic_promo.php?pic_id=$row[pic_id]' class='text-black'>Update</a> |
							  <a href='delete_pic_promo.php?pic_id=$row[pic_id]&pic_file=$row[pic_file]' class='text-black' onclick='return konfirmasi();'>Delete</a></td>";
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
     
