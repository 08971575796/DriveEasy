<?php
    include("koneksi.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST["type"];
    $plat = $_POST["plat"];
    $warna = $_POST["warna"];
    $thn_produksi = $_POST["thn_produksi"];
    $isi_silinder = $_POST["isi_silinder"];
    $bahan_bakar = $_POST["bahan_bakar"];
    $jumlah_kursi = $_POST["jumlah_kursi"];
    $harga_sewa = $_POST["harga_sewa"];

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    // Siapkan query SQL untuk memasukkan data
    $sql = "INSERT INTO detail_mobil (type, plat, warna, thn_produksi, isi_silinder, bahan_bakar, jumlah_kursi, harga_sewa) VALUES ('$type', '$plat', '$warna', '$thn_produksi', '$isi_silinder', '$bahan_bakar','$jumlah_kursi', '$harga_sewa')";

    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
        alert("<?php echo "Data berhasil di tambahkan"?>");
        window.location.replace('tambahdatamobil.php');
      </script>
      <?php
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
    // Tutup koneksi
    $koneksi->close();
}
?>