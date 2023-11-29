<?php
session_start();
include("koneksi.php");

// Ambil nilai yang dimasukkan oleh pengguna
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query SQL untuk memeriksa apakah pengguna terdaftar di tabel admin
    $query = "SELECT * FROM loginadmin WHERE email = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Jika pengguna terdaftar, verifikasi password
        if (password_verify($password, $row['password'])) {
            // Mulai sesi jika belum dimulai
            $_SESSION['email'] = $email; // Simpan email dalam sesi
            ?>
            <script>
                alert("Email benar, Selamat datang!");
                window.location.replace("dashboardadmin.php");
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Password Salah, Mohon Coba Lagi.");
                window.location.replace("login.php");
            </script>
            <?php
            exit();
        }
    } else {
        ?>
        <script>
            alert("Email tidak terdaftar, Mohon Coba Lagi.");
            window.location.replace("login.php");
        </script>
        <?php
        exit();
    }
}
?>
