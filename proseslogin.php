<?php
include ("koneksi.php");
include ("login.php");
// Ambil nilai yang dimasukkan oleh pengguna
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
  



    // Query SQL untuk memeriksa apakah pengguna terdaftar di tabel admin
    // $result = $conn->query($query);
    $query = "SELECT * FROM loginadmin WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) >= 1) {
      // Jika pengguna terdaftar, alihkan ke halaman welcome.php atau halaman lain yang sesuai
      session_start(); // Mulai sesi jika belum dimulai
      $_SESSION['email'] = $email; // Simpan email dalam sesi
      ?>
      <script>
          alert("Email benar, Selamat datang!");
          window.location.replace("dashboardadmin.php");
          </script>
      <?php
      header("location: dashboardadmin.php");
  } else {
      ?>
      <script>
          alert("Email atau Password Salah, Mohon Coba Lagi.");
          window.location.replace("login.php");
      </script>
      <?php
      exit();
  }
  
}