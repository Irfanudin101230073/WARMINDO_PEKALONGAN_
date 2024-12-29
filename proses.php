<?php
include 'database.php';
$db = new Database();
$aksi = $_GET['aksi'];

if ($aksi == 'tambah') {
    $nama = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    

    // Upload foto
    $foto = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    $folder = "uploads/";

    if (move_uploaded_file($tmp_name, $folder . $foto)) {
        $db->tambahData($nama, $lokasi,  $foto);
        $_SESSION['message'] = "Data berhasil ditambahkan!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Data gagal ditambahkan!";
        $_SESSION['message_type'] = "danger";
    }
    header("location:index.php");

} elseif ($aksi == 'edit') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    

    // Cek apakah ada upload foto baru
    if (!empty($_FILES['foto']['name'])) {
        $foto = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];
        $folder = "uploads/";
        //file foto akan tersimpan pada folder upload
        move_uploaded_file($tmp_name, $folder . $foto);
    } else {
        $foto = null; // Foto tidak diubah
    }

    $db->updateData($id, $nama, $lokasi,  $foto);
    header("location:index.php");

} elseif ($aksi == "hapus") {
    $db->delete($_GET['id']);
    header("location:index.php");
}
