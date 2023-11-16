<?php
$koneksi = new mysqli ("localhost", "root", "", "driveeasy2");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $password = $_POST['password'];

    // Lakukan validasi data jika diperlukan

    // Periksa koneksi
    if ($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }

    // Siapkan query SQL untuk memasukkan data
    $sql = "INSERT INTO data_pelanggan (nama, alamat, telepon, password) VALUES ('$nama', '$alamat', '$telepon', '$password')";

    if ($koneksi->query($sql) === TRUE) {
        ?>
        <script>
        alert("<?php echo "Data berhasil di tambahkan"?>");
        window.location.replace('tambahdatapelanggan.php');
      </script>
      <?php
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Tutup koneksi
    $koneksi->close();
}
?>