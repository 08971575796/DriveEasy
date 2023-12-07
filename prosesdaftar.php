<?php
// Hubungkan ke database (sesuaikan dengan koneksi database Anda)
include("koneksi.php");

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

// Ambil data dari formulir
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Periksa apakah username atau email sudah terdaftar
$cek_query = "SELECT * FROM loginadmin WHERE useradmin='$username' OR email='$email'";
$cek_result = $conn->query($cek_query);

if ($cek_result->num_rows > 0) {
    ?>
    <script>
      alert("<?php echo "Username atau email sudah terdaftar, Silahkan coba lagi"?>");
      window.location.replace('register.php');
    </script>
    <?php
} else {
    // Validasi password hanya huruf dan angka
    if (!preg_match('/^[a-zA-Z0-9]+$/', $password)) {
        ?>
        <script>
          alert("<?php echo "Password hanya boleh terdiri dari huruf dan angka"?>");
          window.location.replace('register.php');
        </script>
        <?php
        exit();
    }

    // Enkripsi password sebelum disimpan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Simpan data pengguna ke database
    $insert_query = "INSERT INTO loginadmin (useradmin, email, password) VALUES ('$username', '$email', '$hashed_password')";
    if ($conn->query($insert_query) === TRUE) {
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
