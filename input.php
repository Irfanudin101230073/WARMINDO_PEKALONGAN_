<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .me2{
        margin-left: 50px;
        margin-right: 50px;
      }

      .logo-right{
        margin-left: 50px;
        margin-right: 50px;
      }
    </style>
  </head>
  <body>
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

    <div class="container mt-3">
      <h1 class="text-center">Tambahkan Data</h1>
      <hr class="mt-0">
     
      <form method="POST" action="proses.php?aksi=tambah" enctype="multipart/form-data">
  <!-- Kolom lain... -->
  

        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
          <label for="lokasi" class="form-label">Lokasi</label>
          <input type="text" class="form-control" id="lokasi" name="lokasi">
        </div>
        <div class="mb-3">
          <label for="foto" class="form-label">Upload Foto</label>
           <!-- file gambar yang sudah di upload akan tersimpan dalam database dan pada folder upload... -->
          <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
