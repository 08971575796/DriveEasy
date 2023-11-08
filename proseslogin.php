<?php
include ("koneksi.php");
include ("login.php");
// Ambil nilai yang dimasukkan oleh pengguna
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $berhasil = "Berhasil Login";
    $successMessage = "Login successful";
    $erorMessage = "Login failed. Please try again.";


    // Query SQL untuk memeriksa apakah pengguna terdaftar di tabel admin
    $query = "SELECT * FROM loginadmin WHERE email = '$email' AND password = '$password'";
    echo $query;
    // $result = $conn->query($query);
    $query = "SELECT * FROM loginadmin WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
if (mysqli_num_rows($result) == 1) {
    // Jika pengguna terdaftar, alihkan ke halaman welcome.php atau halaman lain yang sesuai
    header("location: dashboardadmin.php");
    // $response = array('status' => 'success', 'message' => 'Login berhasil');
    echo '<script>';
    echo 'alert("' . $successMessage . '");';
    echo 'window.location.href = "dashboardadmin.php";';
    echo '</script>';
    exit();
} else {
      ?>
        <script>
          alert ("Email atau Password Salah, Mohon Coba Lagi.");
          window.location.replace("login.php");
        </script>
      <?php
}
}