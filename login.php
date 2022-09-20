<html>
<head>
	<title>Login</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
<body style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(gambar/background.jpg);
              background-size: cover;
              background-repeat: no-repeat;
              background-position: center center;
              width:100%;
              height:100vh;
              align-items: center;
">
<?php
require('koneksi.php');
session_start();
// di bawah ini buat masukin username sama password
if (isset($_POST['username'])){
	$username = ($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn,$username);
	$password = ($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	// di bawah ini ngecek datanya udah ada apa belum
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
    // abis itu masuk ke laman index
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/Password Salah.</h3> 
<br/>Klik di sini <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<center>
<div class="container-fluid mt-5">
	<div class="card" style="width:30rem;">
	  <div class="card-header">
	    <center><img src="gambar/logo.jpg" style="width: 150px; height: 150px;"></center>
	  </div>
	  <div class="card-body">
	   <table align="center">
	   	<h4>LOGIN</h4>
		<form action="" method="post" name="login">
		<tr>
			<td>
				<div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Username:</label>
			    <input type="text" name="username" placeholder="Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
			    </div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Password:</label>
			    <input type="password" name="password" placeholder="Password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
			    </div>
			</td>
		</tr>
		<tr>
			<td>
				<button type="submit" value="Login" name="submit" class="btn btn-info">Login</button>
				<button type="reset" value="Reset" name="reset" class="btn btn-danger">Reset</button>
				
			</td>
		</tr>
		</form>
	  </table>
	  <hr>
		<tr><td><center>Belum punya akun? <br><a href="registrasi.php">Registrasi</a></center></td></tr>
	 </div>
		<?php } ?>
	   
	  </div>
	</div>
</div>
</center>

</body>
</html>