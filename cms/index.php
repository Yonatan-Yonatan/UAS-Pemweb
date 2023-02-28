<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Dashboard - Login</title>
<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">
<!--<link rel="stylesheet" href="css/reset.css" />-->
<link rel="stylesheet" href="css/alert.core.css" />
<link rel="stylesheet" href="css/alert.lite.css" id="alertJStheme" />
<!--<link rel="stylesheet" href="css/main.css?v=0.0.0" />-->
<script src="js/alert.js"></script>
</head>


<body class="bg-gradient-warning">
	<?php
    	require_once "connection.php";
     	if (isset($_POST['submit']))
	 	{
	  		$email = $_POST['email'];
			$password = md5($_POST['password']);
			
			$sql= "";
			$sql = " select * from tbladmin where email='".$email."' and password='".$password."'";
			$result = mysqli_query($conn, $sql); 
			if (mysqli_num_rows($result)> 0)
			{ 
				$row=mysqli_fetch_assoc($result);
	     	 	$username = $row['nama_depan']." ".$row['nama_belakang'];
         		session_start(); 
				$_SESSION['username'] = $username;
				$_SESSION['isLoggedin']= '1';
			 
				header("location: dashboard.php");	 
	   		}	
	   		else
	   		{	 
	         	echo "<script>                
                alertjs.show({
                title: 'Error!',
                text: 'Maaf Email/Password Anda Salah',
                from: 'left',
                effect: 'ease-in-bounce',
                complete: function( val ) 
				{
                }
                });
            	</script>";
			}	 
	 	}
	?>

	<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
    	<div class="col-xl-10 col-lg-12 col-md-9">
			<div class="card o-hidden border-0 shadow-lg my-5">
         		 <div class="card-body p-0">
            		<!-- Nested Row within Card Body -->
            		<div class="row">
              			<!--<div class="col-lg-6 d-none d-lg-block bg-login-image">-->
			  			<div class="col-lg-6 d-none d-lg-block" style="padding-top:100px">
			      			<img src="../Gambar/logo(1).png" class="img-fluid" style="width:1000px">
			  			</div>
              			<div class="col-lg-6">
                			<div class="p-5">
                  				<div class="text-center">
                    				<h1 class="h4 text-gray-900 mb-4">Admin Login</h1>
                  				</div>
                  				<form class="user" method="post" action="index.php">
                    				<div class="form-group">
					 					<label>Email</label>
                      					<input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="email" placeholder="Masukkan Email" required>
                    				</div>
                    				<div class="form-group">
					 					<label>Password</label>
                      					<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required>
                    				</div>
                    				<div class="form-group">
                     					<input type="checkbox" onClick="myFunction()"> &nbsp;&nbsp;Show Password 
					  
                    				</div>
									<button type="submit"  class="btn btn-primary btn-user btn-block" name="submit">Login</button><hr>
                			</div>
              			</div>
            		</div>
          		</div>
        	</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<script>
function myFunction() 
{
	var x = document.getElementById("password");
  	if (x.type === "password") 
	{
    	x.type = "text";
  	}
	else 
	{
    	x.type = "password";
  	}
}
</script>
  
</body>
</html>
