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

<title>List Admin</title>
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
	<h2><?php echo "<u>List Admin</u>";?></h2><br>
    <a href="create_admin.php"><button type="button" class="btn btn-warning">Add Admin</button></a><br><br>
 	<table class='table table-hover'>
    	<thead>
      		<tr>
	    		<th>ID Admin</th> 
        		<th>Nama Depan</th>
        		<th>Nama Belakang</th>
        		<th>Email</th>
				<th>Action</th>
      		</tr>
    	</thead>
    <tbody>
	
   	<?php 
    	$sSQL="";
      	$sSQL="select * from tbladmin order  by id_admin";
		$result=mysqli_query($conn, $sSQL);
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row=mysqli_fetch_assoc($result))
			{
				$id_admin = $row['id_admin'];
				$depan = $row['nama_depan'];
				$belakang = $row['nama_belakang'];
				$email= $row['email'];
	?>		
				   			   
	<tr>
		<td><?php echo $id_admin;?></td>
        <td><?php echo  $depan;?></td>
        <td><?php echo $belakang;?></td>
        <td><?php echo $email;?></td>
		<td><?php echo "<a href='update_admin.php?id_admin=$id_admin'>UPDATE</a> | 
						<a href='delete_admin.php?id_admin=$id_admin' onclick='return konfirmasi();'>DELETE</a>"; ?> </td>
    </tr>
	<?php	   
			}
		} 
   ?>
</div>

</body>
</html>
