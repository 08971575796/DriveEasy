<?php
// Hubungkan ke database (sesuaikan dengan koneksi database Anda)
$koneksi = new mysqli("localhost", "root", "", "driveeasy6");

if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

// Ambil data dari formulir
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Periksa apakah username atau email sudah terdaftar
$cek_query = "SELECT * FROM loginadmin WHERE useradmin='$username' OR email='$email'";
$cek_result = $koneksi->query($cek_query);

if ($cek_result->num_rows > 0) {
    ?>
    <script>
      alert("<?php echo "Username atau email sudah terdaftar, Silahkan coba lagi"?>");
      window.location.replace('register.php');
    </script>
    <?php
} else {
    // Enkripsi password sebelum disimpan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Simpan data pengguna ke database
    $insert_query = "INSERT INTO loginadmin (useradmin, email, password) VALUES ('$username', '$email', '$hashed_password')";
    if ($koneksi->query($insert_query) === TRUE) {
        ?>
        <script>
          alert("<?php echo "Daftar akun sukses"?>");
          window.location.replace('login.php');
        </script>
        <?php
        exit();
    } else {
        echo "Error: " . $insert_query . "<br>" . $koneksi->error;
    }
}

$koneksi->close();
?>
