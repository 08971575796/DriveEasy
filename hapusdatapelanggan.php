<?php
// Koneksi ke database (gantilah dengan informasi koneksi Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "driveeasy6";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa apakah parameter ID ada dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil password dari database sebelum dihapus
    $getPasswordQuery = "SELECT password FROM loginuser WHERE id_user = $id";
    $result = $conn->query($getPasswordQuery);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        // Hapus data pelanggan dari database
        $deleteQuery = "DELETE FROM loginuser WHERE id_user = $id";

        if ($conn->query($deleteQuery) === TRUE) {
            ?>
            <script>
                alert("<?php echo "Data berhasil dihapus"?>");
                window.location.replace('datapelanggan.php');
            </script>
            <?php
        } else {
            echo "Error: " . $deleteQuery . "<br>" . $conn->error;
        }
    } else {
        echo "ID pelanggan tidak ditemukan";
    }
} else {
    echo "ID pelanggan tidak ditemukan";
}

// Tutup koneksi database
$conn->close();
?>
