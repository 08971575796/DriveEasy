<?php
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $idMobil = $_GET['id'];

    // Establish database connection (adjust the credentials accordingly)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "driveeasy6";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Perform the deletion based on the ID
    $sql = "DELETE FROM stock_mobil WHERE id_mobil = $idMobil";

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
