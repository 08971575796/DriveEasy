<?php
// Sesuaikan konfigurasi database Anda
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "driveeasy6";

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil data dari formulir reset password
$email = $_POST['email'];
$newPassword = $_POST['password']; // Password tidak di-hash

// Perbarui password di database untuk email yang sesuai
$sql = "UPDATE loginadmin SET password='$newPassword' WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
    ?>
    <script>
    alert("<?php echo "Password berhasil di ganti"?>");
    window.location.replace('login.php');
    </script>
    <?php
} else {
    ?>
    <script>
    alert("<?php echo "Password gagal di ganti"?>");
    window.location.replace('form_password_baru.php');
    . $conn->error;
    </script>
    <?php
}

// Tutup koneksi ke database
$conn->close();
?>