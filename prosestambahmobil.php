<?php
$koneksi = new mysqli ("localhost", "root", "", "driveeasy2");
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
    $id_mobil = $_POST["id_mobil"];
    $nama_mobil = $_POST["nama_mobil"];
    $merk = $_POST["merk"];
    $warna = $_POST["warna"];
    $tahun = $_POST["tahun"];
    $cc = $_POST["cc"];
    $bahan_bakar = $_POST["bahan_bakar"];
    $harga_sewa = $_POST["harga_sewa"];

    $cek_query = "SELECT * FROM mobil WHERE id_mobil='$id_mobil' OR nama_mobil='$nama_mobil'";
    $cek_result = $koneksi->query($cek_query);
    // Query untuk menambahkan data ke dalam tabel
    $insert_query = "INSERT INTO mobil (nama_mobil, merk, warna, tahun, cc, bahan_bakar, harga_sewa) VALUES ('$nama_mobil', '$merk', '$warna', '$tahun', '$cc', '$bahan_bakar', '$harga_sewa')";
    if ($koneksi->query($query) === TRUE) {
        ?>
        <script>
          alert("<?php echo "Data berhasil di masukkan"?>");
          window.location.replace('tambahdatamobil.php');
        </script>
        <?php
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }

    $koneksi->close();
?>
