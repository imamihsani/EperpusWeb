<?php
	include 'koneksi.php';
	include 'verifikasi.php';
	$query = "SELECT * FROM tb_perpusabrar;";
	$sql = mysqli_query($conn, $query);

	$no = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="datatables/datatables.css">
	<script type="text/javascript" src="datatables/datatables.js"></script>
	<meta charset="utf-8">
	<title>Perpus Abrar</title>
</head>
<script type="text/javascript">
	$(document).ready(function () {
    $('#datatables').DataTable();
});
</script>
<body>
	
	<!--NAVBAR-->
	<nav class="navbar bg-light">
	  	<div class="container-fluid">
		    <a class="navbar fixed-top" style="background-color: #dbeb34; text-decoration: none; color:black;" >
		      <h5><b>PERPUSTAKAAN ABRAR</b></h5>
		    </a>
 		</div>
	</nav>
	<br>
	<!--/NAVBAR-->

	<!--INO AKUN-->
	<div>
		Welcome <b><?php echo $_SESSION['username']; ?>!</b>
		<br><br> <!-- br ini buat ngasih jarak spasi ke bawah ya cuk-->
		<a href="logout.php">Logout</a>
	</div>
	<!--/INFO AKUN-->

	<!--ISI UTAMA-->

		<div class="container-fluid mt-3">
			<h3>DAFTAR BUKU-BUKU</h3>
			<a href="kelola.php" type="button" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Buku</a>
			<div class="table-responsive">
				<table id="datatables" class="table align-middle table-bordered table-hover">
				    <thead>
				      <tr>
				       	<th><center>No.</center></th>
				       	<th><center>Cover</center></th>
				       	<th><center>Nama Buku</center></th>
				       	<th><center>Penulis</center></th>
				       	<th><center>Penerbit</center></th>
				       	<th><center>Tahun Terbit</center></th>
				       	<th><center>Link</center></th>
				       	<th><center>Aksi</center></th>
				       
				      </tr>
				    </thead>
				    <tbody>
				    <?php
				    	while($result = mysqli_fetch_assoc($sql)){
				    ?>

				      <tr>
				        <td><center><?php echo ++$no;?></center></td>
				        <td><center><img src="cover/<?php echo $result['cover'];?>" style="width:125px;"></center></td>
				        <td><?php echo $result['namabuku'];?></td>
				        <td><?php echo $result['penulis'];?></td>
				        <td><?php echo $result['penerbit'];?></td>
				        <td><?php echo $result['tahunterbit'];?></td>
				        <td><a href="<?php echo $result['link'];?>" target="_blank"><?php echo $result['link'];?></a></td>
				        <td>
				        	<center>
				        	<a href="kelola.php?ubah=<?php echo $result['no'];?>" type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
				        	 
				        	<a href="proses.php?hapus=<?php echo $result['no'];?>" type="button" name="hapus" class="btn btn-danger btn-sm" onClick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Tersebut?')"><i class="fa fa-trash"></i></a>
				        	</center>
				        </td>
				      </tr>
				    <?php
				    }
					?>
				 	</tbody>
				</table>
			</div>
		</div>
		
	<!--/ISI UTAMA-->
<!--NAVBAR-->
	<nav class="navbar bg-light">
	  	<div class="container-fluid">
	  		
		    <a class="navbar fixed-bottom justify-content-md-end" style="background-color: #dbeb34; text-decoration: none; color:black;" >
		        Sumanto - Informatika
		    </a>
			
 		</div>
	</nav>
	<br>
	<!--/NAVBAR-->

</body>
</html>