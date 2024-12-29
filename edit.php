<?php
include 'database.php';
$db = new Database();
$id = $_GET['id'];
$detail = $db->editData($id);
$dataUser = $detail[0]; // Ambil data pertama dari array
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .me2{
        margin-left: 50px;
        margin-right: auto;
      }

      .logo-right{
        margin-left: auto;
        margin-right: 50px;
      }
    </style>
  </head>
  <body>
    <!--header dan gambar-->
  <nav class="navbar navbar-danger bg-danger">
  <div class="container-fluid d-flex align-items-center">
     <a class="navbar-brand d-flex align-items-center" href="#">
      
     <img
        src="download.png"
        class="me-2"
        height="70"
        alt="MDB Logo"
        loading="lazy"
      />
      
    </a>
    <img
        src="no-bg.png"
        class="logo-right"
        height="80"
        alt="MDB Logo"
        loading="lazy"
      />
  </div>
</nav>
      <!--form edit data-->
    <div class="container mt-3">
      <h1>Edit Data</h1>
      <form method="POST" action="proses.php?aksi=edit" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $dataUser['id']; ?>">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dataUser['nama']; ?>">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Lokasi</label>
          <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?php echo $dataUser['lokasi']; ?>">
        </div>
        <div class="mb-3">
          <label for="foto" class="form-label">Unggah Foto Baru (opsional)</label>
          <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
