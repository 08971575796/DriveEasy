<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $id = $_POST['id'];
    $namaMobil = $_POST['nama_mobil'];
    $merek = $_POST['merk'];
    $warna = $_POST['warna'];
    $tahun = $_POST['tahun'];
    $cc = $_POST['cc'];
    $bahanBakar = $_POST['bahan_bakar'];
    $jumlahKursi = $_POST['jumlah_kursi'];
    $hargaSewa = $_POST['harga_sewa'];

    // Query untuk mengupdate data mobil
    $sql = "UPDATE stock_mobil SET nama_mobil='$nama_mobil', merk='$merk', warna='$warna', tahun='$tahun', cc='$cc', bahan_bakar='$bahan_bakar', jumlah_kursi='$jumlah_kursi', harga_sewa='$harga_sewa' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
