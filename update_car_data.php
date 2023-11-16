<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Establish database connection (adjust the credentials accordingly)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "driveeasy2";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get data from the form
    $idMobil = $_POST['editId'];
    $namaMobil = $_POST['editNamaMobil'];
    $editMerk = $_POST['editMerk'];
    $editWarna = $_POST['editWarna'];
    $editTahun = $_POST['editTahun'];
    $editCc = $_POST['editCc'];
    $editBahanBakar = $_POST['editBahanBakar'];
    $editHargaSewa = $_POST['editHargaSewa'];
    // Retrieve other form fields as needed

    // Update car data in the database
    $sql = "UPDATE mobil SET nama_mobil = '$namaMobil', merk = '$editMerk', warna = '$editWarna', tahun = '$editTahun', cc = '$editCc', bahan_bakar = '$editBahanBakar', harga_sewa = '$editHargaSewa' WHERE id_mobil = $idMobil";

    if ($conn->query($sql) === TRUE) {
        echo "data mobil berhasil di update";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
