<?php
	include 'koneksi.php';

	if(isset($_POST['aksi'])){
		if($_POST['aksi'] == "add"){



			$cover = $_FILES['cover']['name'];
			$namabuku = $_POST['namabuku'];
			$penulis = $_POST['penulis'];
			$penerbit = $_POST['penerbit'];
			$tahunterbit = $_POST['tahunterbit'];
			$link = $_POST['link'];

			$dir = "cover/";
			$tmpFile = $_FILES['cover']['tmp_name'];

			move_uploaded_file($tmpFile, $dir.$cover);

			$query = "INSERT INTO tb_perpusabrar VALUES(null,'$cover', '$namabuku', '$penulis', '$penerbit', '$tahunterbit', '$link' )";
			$sql = mysqli_query($conn, $query);

			if($sql){
				header("location: index.php");
			} else {
				echo $query;
			}

			//echo "tambah data <a href='index.php'>[Home]</a>";}
		} else if($_POST['aksi'] == "edit"){
			
		

			$no = $_POST['no'];
			$cover = $_FILES['cover']['name'];
			$namabuku = $_POST['namabuku'];
			$penulis = $_POST['penulis'];
			$penerbit = $_POST['penerbit'];
			$tahunterbit = $_POST['tahunterbit'];
			$link = $_POST['link'];

			$queryShow = " SELECT * FROM tb_perpusabrar WHERE no = '$no';";
			$sqlShow = mysqli_query($conn, $queryShow);
			$result = mysqli_fetch_assoc($sqlShow);

			$query =" UPDATE tb_perpusabrar SET cover ='$cover', namabuku='$namabuku', penulis='$penulis', penerbit='$penerbit', tahunterbit='$tahunterbit', link='$link' WHERE no='$no';";
			$sql = mysqli_query($conn, $query);

			if($sql){
				header("location: index.php");
			} else {
				echo $query;
			}
		}
	}

	if(isset($_GET['hapus'])){
		$no = $_GET['hapus'];

		$queryShow = " SELECT * FROM tb_perpusabrar WHERE no = '$no';";
		$sqlShow = mysqli_query($conn, $queryShow);
		$result = mysqli_fetch_assoc($sqlShow);

		unlink("cover/".$result['cover']);

		$query = "DELETE FROM tb_perpusabrar WHERE no = '$no';";
		$sql = mysqli_query($conn, $query);

		if($sql){
				header("location: index.php");
			} else {
				echo $query;
			}
		echo "hapus data <a href='index.php'>[Home]</a>";
	}	
?>