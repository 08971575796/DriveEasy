<?php
// Sesuaikan konfigurasi database Anda
include("koneksi.php");


// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil data dari formulir reset password
$email = $_POST['email'];
$newPassword = $_POST['password']; // Password tidak di-hash

// Enkripsi password sebelum disimpan
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

// Perbarui password di database untuk email yang sesuai
$sql = "UPDATE loginadmin SET password='$hashedPassword' WHERE email='$email'";

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
