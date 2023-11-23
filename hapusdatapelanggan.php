<?php
// Koneksi ke database (gantilah dengan informasi koneksi Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "driveeasy6";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa apakah parameter ID ada dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data pelanggan dari database
    $sql = "DELETE FROM loginuser WHERE id_user = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Data pelanggan berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID pelanggan tidak ditemukan";
}

// Tutup koneksi database
$conn->close();
?>
