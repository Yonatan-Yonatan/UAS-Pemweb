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
	<h2><?php echo "<u>List Pendaftaran</u>";?></h2><br>
 	<table class='table table-hover'>
    	<thead>
      		<tr>
	    		<th>No. Pendaftaran</th> 
        		<th>Nama </th>
				<th>No. HP</th>
        		<th>Email</th>
				<th>Jenis Kelamin</th>
				<th>Tingkatan Sekolah</th>
				<th>Jenis Kursus</th>
				<th>Jam Kursus</th>
				<th>Delete</th>
      		</tr>
    	</thead>
    <tbody>
	
   	<?php 
    	$sSQL="";
      	$sSQL="select * from tbldaftar order  by no_pendaftaran";
		$result=mysqli_query($conn, $sSQL);
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row=mysqli_fetch_assoc($result))
			{
				$no_pendaftaran = $row['no_pendaftaran'];
				$nama = $row['nama'];
				$no_hp = $row['no_hp'];
				$email= $row['email'];
				$jenis_kelamin = $row['jenis_kelamin'];
				$jenjang_sekolah = $row['jenjang_sekolah'];
				$jenis_kursus = $row['jenis_kursus'];
				$jam_kursus = $row['jam_kursus'];
	?>		
				   			   
	<tr>
		<td><?php echo $no_pendaftaran;?></td>
        <td><?php echo $nama;?></td>
		<td><?php echo $no_hp;?></td>
        <td><?php echo $email;?></td>
		<td><?php echo $jenis_kelamin;?></td>
		<td><?php echo $jenjang_sekolah;?></td>
		<td><?php echo $jenis_kursus;?></td>
		<td><?php echo $jam_kursus;?></td>
		<td><?php echo "<a href='delete_pendaftaran.php?no_pendaftaran=$no_pendaftaran' onclick='return konfirmasi();'>DELETE</a>"; ?> </td>
    </tr>
	<?php	   
			}
		} 
   ?>
</div>

</body>
</html>
