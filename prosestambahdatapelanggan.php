<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "driveeasy2";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pelanggan = $_POST["id_pelanggan"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];
    $password = $_POST["password"];

    // Query untuk menambahkan data ke dalam tabel
    $query = "INSERT INTO data_pelanggan (id_pelanggan, nama, alamat, telepon, password) VALUES ('$id_pelanggan', '$nama', '$alamat, '$telepon', '$password')";

    if($koneksi->query($query) === TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }

    $koneksi->close();
}
?>
