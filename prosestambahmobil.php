<?php
$koneksi = new mysqli ("localhost", "root", "", "driveeasy2");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_mobil = $_POST["nama_mobil"];
    $merk = $_POST["merk"];
    $warna = $_POST["warna"];
    $tahun = $_POST["tahun"];
    $cc = $_POST["cc"];
    $bahan_bakar = $_POST["bahan_bakar"];
    $harga_sewa = $_POST["harga_sewa"];

    // Periksa koneksi
    if ($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }
    // Siapkan query SQL untuk memasukkan data
    $sql = "INSERT INTO mobil (nama_mobil, merk, warna, tahun, cc, bahan_bakar, harga_sewa) VALUES ('$nama_mobil', '$merk', '$warna', '$tahun', '$cc', '$bahan_bakar', '$harga_sewa')";

    if ($koneksi->query($sql) === TRUE) {
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