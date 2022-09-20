<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" href="style.css" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>
<body style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(gambar/background2.jpg);
              background-size: cover;
              background-repeat: no-repeat;
              background-position: center center;
              width:100%;
              height:100vh;
              align-items: center;
">
<?php
require('koneksi.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) 
		VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
<h3>Registrasi Berhasil.</h3>
<br/>Klik disini untuk <a href='login.php'>Login</a></div>";
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
		<form action="" method="post" name="login">
		<center><h4>REGISTRASI AKUN</h4></center>
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
			    <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Email:</label>
			    <input type="email" name="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
			    </div>
			</td>
		</tr>
		<tr>
			<td>
				<button type="submit" value="Register" name="submit" class="btn btn-warning">Registrasi</button>
			</td>
		</tr>
		</form>
	  </table>
	  
	 </div>
		<?php } ?>
	   
	  </div>
	</div>
</div>
</center>



</body>
</html>
