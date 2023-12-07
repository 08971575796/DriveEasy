<?php
// Koneksi ke database MySQL
$servername = "localhost";
$username = "tifz1761_root";
$password = "tifnganjuk321";
$database = "tifz1761_driveeasy";

/* $servername = "localhost";
$username = "root";
$password = "";
$database = "driveeasy6"; */
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal " . $conn->connect_error);
}else{
}
?>