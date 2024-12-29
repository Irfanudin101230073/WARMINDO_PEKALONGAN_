<?php
include 'database.php';
$db = new Database();
$id = $_GET['id'];
$detail = $db->editData($id);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Informasi User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .me-2{
        margin-left: 50px;
        margin-right: auto;
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
      <h1>Detail Informasi</h1>
      <hr>

      <?php foreach ($detail as $dataUser) { ?>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="uploads/<?php echo $dataUser['foto']; ?>" class="img-fluid rounded-start" alt="Foto Profil">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php echo $dataUser['nama']; ?></h5>
              <p class="card-text">
                Lokasi: <?php echo $dataUser['lokasi']; ?><br>
              </p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
