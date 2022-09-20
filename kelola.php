
<?php
    include 'koneksi.php';

      $no = '';
     //$cover = $result['cover'];
      $namabuku = '';
      $penulis = '';
      $penerbit = '';
      $tahunterbit = '';
      $link = '';

    if(isset($_GET['ubah'])){
      $no = $_GET['ubah'];
      
      $query = "SELECT * FROM tb_perpusabrar WHERE no = '$no';";
      $sql = mysqli_query($conn, $query);

      $result = mysqli_fetch_assoc($sql);

      //$cover = $result['cover'];
      $namabuku = $result['namabuku'];
      $penulis = $result['penulis'];
      $penerbit = $result['penerbit'];
      $tahunterbit = $result['tahunterbit'];
      $link = $result['link'];
      //var_dump($result);
     // die();
    }
?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
<meta charset="utf-8">
<center>

<div class="container-fluid mt-5">
<div class="card" style="width:48rem;">
  <div class="card-body" >
    <h3>PENGELOLAAN BUKU</h3>
    <hr>
  <form method="POST" action="proses.php" enctype="multipart/form-data">
   <input type="hidden" value="<?php echo $no; ?>" name="no">

    <div class="row mb-3">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Cover</label>
        <div class="col-sm-10">
          <input <?php if(!isset($_GET['ubah'])){ echo "required";} ?> required type="file" class="form-control" id="inputGroupFile02" name="cover" accept="image/*">
        </div>
    </div>

   
    <div class="row mb-3">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Buku</label>
      <div class="col-sm-10">
        <input required type="text" class="form-control" id="colFormLabel" placeholder="Masukkan nama buku baru" name="namabuku" value="<?php echo $namabuku; ?>">
      </div>
    </div>

    <div class="row mb-3">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Penulis</label>
      <div class="col-sm-10">
        <input required type="text" class="form-control" id="colFormLabel" placeholder="Masukkan penulis/pengarang buku" name="penulis" value="<?php echo $penulis; ?>">
      </div>
    </div>

    <div class="row mb-3">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Penerbit</label>
      <div class="col-sm-10">
        <input required type="text" class="form-control" id="colFormLabel" placeholder="Masukkan nama penerbit buku" name="penerbit" value="<?php echo $penerbit; ?>">
      </div>
    </div>

    <div class="row mb-3">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Tahun Terbit</label>
      <div class="col-sm-10">
        <input required type="number" class="form-control" id="colFormLabel" placeholder="Masukkan tahun terbit buku" name="tahunterbit" value="<?php echo $tahunterbit; ?>">
      </div>
    </div>

    <div class="row mb-3">
      <label for="colFormLabel" class="col-sm-2 col-form-label">Link</label>
      <div class="col-sm-10">
        <input required type="text" class="form-control" id="colFormLabel" placeholder="Masukkan link buku" name="link" value="<?php echo $link; ?>">
      </div>
    </div>
   

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <?php
        if(isset($_GET['ubah'])){
      ?>
      <button type="submit" name="aksi" value="edit" class="btn btn-outline-warning"><i class="fa fa-save"></i> Simpan</button>
      <?php
        }else{
      ?>
       <button type="submit" name="aksi" value="add" class="btn btn-outline-success"><i class="fa fa-plus"></i> Tambahkan</button>
       <?php
        }
       ?>
      <a href="index.php" type="button" class="btn btn-outline-danger"><i class="fa fa-close"></i> Batalkan</a>
    </div>
  </form>
  </div>
</div>
</div>
</center>