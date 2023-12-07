<?php
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $idMobil = $_GET['id'];

    // Establish database connection (adjust the credentials accordingly)
    include("koneksi.php");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Perform the deletion based on the ID
    $sql = "DELETE FROM detail_mobil WHERE id_detail_mobil = $idMobil";

    if ($conn->query($sql) === TRUE) {
        echo "data berhasil di hapus";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
