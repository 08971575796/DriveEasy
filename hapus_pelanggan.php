<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "driveeasy2";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil ID pelanggan dari URL
$id_pelanggan = $_GET['id_pelanggan'];

// Query untuk menghapus pelanggan
$sql = "DELETE FROM data_pelanggan WHERE id_pelanggan=$id_pelanggan";

if ($conn->query($sql) === TRUE) {
    echo "Pelanggan berhasil dihapus.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
