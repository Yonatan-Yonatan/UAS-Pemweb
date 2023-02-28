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

<title>List Promo</title>
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
	<h2><?php echo "<u>List Promo</u>";?></h2><br>
    <a href="create_promo.php"><button type="button" class="btn btn-warning">Add Promo</button></a><br><br>
 	<table class='table table-hover'>
    	<thead>
      		<tr>
	    		<th>ID Promo</th> 
        		<th>Jenjang Sekolah</th>
        		<th>Jenis Kursus</th>
        		<th>Harga</th>
				<th>Diskon</th>
				<th>Action</th>
      		</tr>
    	</thead>
    <tbody>
	
   	<?php 
    	$sSQL="";
      	$sSQL="select * from tblpromo order  by id_promo";
		$result=mysqli_query($conn, $sSQL);
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row=mysqli_fetch_assoc($result))
			{
				$id_promo = $row['id_promo'];
				$jenjang = $row['jenjang_sekolah'];
				$jenis_kursus = $row['jenis_kursus'];
				$harga= $row['harga'];
				$diskon= $row['diskon'];
	?>		
				   			   
	<tr>
		<td><?php echo $id_promo;?></td>
        <td><?php echo $jenjang;?></td>
        <td><?php echo $jenis_kursus;?></td>
        <td><?php echo $harga;?></td>
		<td><?php echo $diskon;?></td>
		<td><?php echo "<a href='update_promo.php?id_promo=$id_promo'>UPDATE</a> | 
						<a href='delete_promo.php?id_promo=$id_promo' onclick='return konfirmasi();'>DELETE</a>"; ?> </td>
    </tr>
	<?php	   
			}
		} 
   ?>
</div>

</body>
</html>
