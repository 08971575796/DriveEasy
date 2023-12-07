<?php
// Establish database connection (adjust the credentials accordingly)
include("koneksi.php");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$idMobil = $_GET['id'];

// Fetch car data based on ID
$sql = "SELECT * FROM detail_mobil WHERE id_detail_mobil = $idMobil";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    echo json_encode($data);
} else {
    echo "No data found";
}

$conn->close();
?>
