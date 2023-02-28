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

<title>List Pesan</title>
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

<div class="container">
	<h2><?php echo "<u>List Pesan Contact US</u>";?></h2><br>
 	<table class='table table-hover'>
    	<thead>
      		<tr>
	    		<th>ID Pesan</th> 
        		<th>Nama </th>
        		<th>Email</th>
				<th>Pesan</th>
				<th>Delete</th>
      		</tr>
    	</thead>
    <tbody>
	
   	<?php 
    	$sSQL="";
      	$sSQL="select * from tblcontactus order  by contactus_id";
		$result=mysqli_query($conn, $sSQL);
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row=mysqli_fetch_assoc($result))
			{
				$id_contactus = $row['contactus_id'];
				$nama = $row['nama'];
				$email= $row['email'];
				$pesan = $row['pesan'];
	?>		
				   			   
	<tr>
		<td><?php echo $id_contactus;?></td>
        <td><?php echo $nama;?></td>
        <td><?php echo $email;?></td>
		<td><?php echo $pesan;?></td>
		<td><?php echo "<a href='delete_contactus.php?contactus_id=$id_contactus' onclick='return konfirmasi();'>DELETE</a>"; ?> </td>
    </tr>
    </tr>
	<?php	   
			}
		} 
   ?>
</div>

</body>
</html>
