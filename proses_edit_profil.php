<?php
// Pengaturan koneksi database
include("koneksi.php");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Fungsi untuk membersihkan input
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Tangkap data dari form
$email = clean_input($_POST['email']);
$useradmin = clean_input($_POST['useradmin']);
$password = clean_input($_POST['password']);

// Enkripsi password sebelum disimpan
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Query untuk melakukan update data di database
$query = "UPDATE loginadmin SET email='$email', useradmin='$useradmin', password='$hashedPassword' WHERE email='$email'";

// Eksekusi query
if ($conn->query($query) === TRUE) {
    ?>
    <script>
        alert("Profil Berhasil Di Perbarui.");
        window.location.replace("edit_profil.php");
    </script>
    <?php
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Tutup koneksi ke database
$conn->close();
?>
