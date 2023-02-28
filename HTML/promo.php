<?php
   require_once "connection.php";
?>

<!DOCTYPE html>
<html>

<head>
<title>Beta Course</title>
<link href="css.css" rel="stylesheet" type="text/css">
<link href="contact.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style type="text/css">
<!--
.style1 {font-size: 48px
		 font-family:Verdana
		}
-->

p {	font-size:12px;
	text-align:right;
	}
	
  </style>
</head>

<body>
<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  		<a class="navbar-brand" href="#"><img src="../Gambar/logo(1).png" class="img-fluid" style="width:200px"></a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls=											"navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>

  			<div class="collapse navbar-collapse justify-content-left" id="navbarSupportedContent">
    			<ul class="navbar-nav">
      				<li class="nav-item active">
        				<a class="nav-link" a href="home.php">Home <span class="sr-only">(current)</span></a>
      						</li>
	  							<li class="nav-item active">
        						<a class="nav-link" a href="promo.php">Promo</a>
      						</li>
	  						<li class="nav-item active">
        						<a class="nav-link" a href="about.php">About Us </a>
      						</li>
	  						<li class="nav-item active">
        						<a class="nav-link" a href="contact.php">Contact Us </a>
      						</li>
	  						<li class="nav-item active">
        						<a class="nav-link" a href="daftar.php">Pendaftaran</a>
      						</li>
    						</ul>
  					</div>
			</nav>
		</div>
		
		
<div class="container my-3">
	<div class="card-columns">
<?php 
	$sSQL="";
    $sSQL="select * from tblpromo order  by id_promo";
	$result=mysqli_query($conn, $sSQL);
	if (mysqli_num_rows($result) > 0) 
	{
		while ($row=mysqli_fetch_assoc($result))
		{
			$jenjang = $row['jenjang_sekolah'];
			$jenis_kursus = $row['jenis_kursus'];
			$harga = $row['harga'];
			$diskon= $row['diskon'];
?>		

  		<div class="card bg-warning">
   			<div class="card-header">
		   		<h3 class="text-center"><?php echo $jenjang;?></h3>
		 	</div>
 		 	<div class="card-body bg-white">
		    	<ul>
				    <li>Rp. <?php echo $harga; ?></li>
		   			<li><?php echo $jenis_kursus; ?></li>
					<li> Bisa pilih jam kursus </li>
					<li> Diskon <?php echo $diskon; ?>%</li>		
				</ul>
		 	</div>
  			<div class="card-footer bg-white"> 
				<div class="btn  mx-auto d-block">
					<form name="form1" method="post" action="">
						<label>
							<a href="daftar.php"><input type="button" name="DAFTAR SEKARANG"  value="DAFTAR SEKARANG"></a>
		  				</label>
		  			</form>
				</div>
			</div>
		</div>
<?php	   
		}
	} 
?>
	</div>
</div>
	
<p>*Harga Sudah Termasuk Promo</p>
<P>**Harga Belum Termasuk Pajak</P>

<div class="container-fluid bg-warning">
     <div class="row">
			<div class="col-sm-8">
			   <ul style="list-style-type:none" class="my-3">
		    	<li>
			    	<h3 class="text-white style1">Beta Course Copyright©.</h3>
				</li>
				</ul>
			</div>
	 </div>
</div>

</body>

</html>