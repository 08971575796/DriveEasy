<?php
include 'koneksi.php';

// Query untuk menampilkan data mobil
$query = "SELECT * FROM stock_mobil";
$result = $koneksi->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Merk: " . $row["merk"] . "<br>";
        echo "Model: " . $row["model"] . "<br>";
        echo "Tahun Produksi: " . $row["tahun_produksi"] . "<br><br>";
    }
} else {
    echo "Tidak ada data mobil.";
}

$koneksi->close();
?>
