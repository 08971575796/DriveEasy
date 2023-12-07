<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Establish database connection (adjust the credentials accordingly)
    include("koneksi.php");


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get data from the form
    $idMobil = $_POST['editId'];
    $editType = $_POST['editType'];
    $editPlat = $_POST['editPlat'];
    $editWarna = $_POST['editWarna'];
    $editTahunProduksi = $_POST['editTahunProduksi'];
    $editIsiSilinder = $_POST['editIsiSilinder'];
    $editBahanBakar = $_POST['editBahanBakar'];
    $editJumlahKursi = $_POST['editJumlahKursi'];
    $editHargaSewa = $_POST['editHargaSewa'];
    // Retrieve other form fields as needed

    // Update car data in the database
    $sql = "UPDATE detail_mobil SET type = '$editType', plat = '$editPlat', warna = '$editWarna', thn_produksi = '$editTahunProduksi', isi_silinder = '$editIsiSilinder', bahan_bakar = '$editBahanBakar', jumlah_kursi = '$editJumlahKursi', harga_sewa = '$editHargaSewa' WHERE id_detail_mobil = $idMobil";


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
