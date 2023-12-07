<?php
// Establish database connection (adjust the credentials accordingly)
include("koneksi.php");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch car data from the database
$sql = "SELECT * FROM detail_mobil";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo "No data found";
}

$conn->close();
?>
