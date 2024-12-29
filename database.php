<?php
    class Database {
        // Properti
        public $host = "localhost";
        public $username = "root";
        public $password = "";
        public $database = "warmindo_dipekalongan";

        public $connect;

        function __construct() {
            $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);

            // Pengujian koneksi
            if (mysqli_connect_errno()) {
                die("Koneksi gagal: " . mysqli_connect_error());
            }
        }
        function tambahData($nama, $lokasi, $foto) {
            mysqli_query($this->connect, "INSERT INTO tb_warmindo (nama, lokasi, foto) 
                                          VALUES ('$nama', '$lokasi', '$foto')");
        }

        // Menampilkan data 
        function tampilData() {
            $data = mysqli_query($this->connect, "SELECT * FROM tb_warmindo");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            return $rows;
        }

        

        // Mengedit data (menampilkan data user yang ingin diedit)
        function editData($id) {
            $stmt = $this->connect->prepare("SELECT * FROM tb_warmindo WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
            return $rows;
        }

        // Memperbarui data
function updateData($id, $nama, $lokasi, $foto = null) {
    if ($foto) {
        $stmt = $this->connect->prepare("UPDATE tb_warmindo SET nama = ?, lokasi = ?, foto = ? WHERE id = ?");
        $stmt->bind_param("sssi", $nama, $lokasi, $foto, $id);
    } else {
        $stmt = $this->connect->prepare("UPDATE tb_warmindo SET nama = ?, lokasi = ? WHERE id = ?");
        $stmt->bind_param("ssi", $nama, $lokasi, $id);
    }
    $stmt->execute();
    $stmt->close();
}


        // Menghapus data
        function delete($id) {
            $stmt = $this->connect->prepare("DELETE FROM tb_warmindo WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
        }
    }
?>
