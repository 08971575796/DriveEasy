<?php
$host = "localhost"; // Ganti dengan host MySQL Anda
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$database = "driveeasy2"; // Ganti dengan nama database yang ingin Anda akses

// Membuat koneksi ke MySQL
$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari permintaan POST
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];
$jumlah = $_POST['jumlah'];

// Lakukan operasi INSERT
$sql = "INSERT INTO transaksi (tanggal, deskripsi, jumlah) VALUES ('$tanggal', '$deskripsi', $jumlah)";

if ($conn->query($sql) === TRUE) {
    echo "Transaksi berhasil dimasukkan ke database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi MySQL
$conn->close();
?>
