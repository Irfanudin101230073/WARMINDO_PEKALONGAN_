<?php
session_start();
include 'database.php';
$db = new Database();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar outlet Warmindo Di Pekalongan!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--style -->
    <style>
      .navbar medium {
        color: white;
        text-align: center;
        margin-left: 25px;
        
          
      }
      .me-2{
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
      <medium><strong>DAFTAR OUTLET WARMINDO DI PEKALONGAN</strong></medium>
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
    <div class="container mt-3">
      

      <!-- Notifikasi berhasil/gagal -->
      <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
          <?php echo $_SESSION['message']; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
      }
      ?>

      <!-- Tombol tambah data -->
      <a href="input.php" class="btn btn-success btn-sm">Tambah Data</a>
      <hr>

      <!-- Tabel untuk menampilkan user -->
    
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Lokasi</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $nomor = 1;
          foreach ($db->tampilData() as $dataUser) {
          ?>
            <tr>
              <th scope="row"><?php echo $nomor++; ?></th>
              <td><?php echo $dataUser['nama']; ?></td>
              <td><?php echo $dataUser['lokasi']; ?></td>
              <td>
          <!-- Tombol aksi -->
    <a href="edit.php?id=<?php echo $dataUser['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
    <a href="proses.php?id=<?php echo $dataUser['id']; ?>&aksi=hapus" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
    <a href="informasi.php?id=<?php echo $dataUser['id']; ?>" class="btn btn-info btn-sm">Detail</a>
</td>

            </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
