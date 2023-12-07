<?php
session_start(); // Mulai sesi
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Admin</title>

    <!-- Add a link to Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Add custom styles -->
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .user-profile {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
        }

        a {
            color: #dc3545;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #fff;
            text-align: center;
            padding: 10px 0;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>
<?php

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Ambil nilai email dari sesi
$email = $_SESSION['email'];

// Koneksi ke basis data (gantilah dengan informasi koneksi yang sesuai)
include("koneksi.php");


// Periksa koneksi basis data
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query untuk mengambil informasi pengguna dari database
$query = "SELECT * FROM loginadmin WHERE email = '$email'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Ambil data pengguna dari hasil kueri
$row = mysqli_fetch_assoc($result);
$username = $row['useradmin'];
$password = $row['password']; // Pastikan untuk tidak menampilkan password secara langsung

// Tutup koneksi basis data
mysqli_close($conn);
?>


<div class="user-profile">
    <h2>Admin Profil</h2>
    <p>Email: <?php echo $email; ?></p>
    <p>Useradmin: <?php echo $username; ?></p>
    <p>Password: <?php echo $password; ?></p>

    <!-- Add additional information from the database if needed -->
    <!-- Example: <p>Name: <?php echo $name; ?></p> -->
    <?php if (!empty($logout_message)): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $logout_message; ?>
        </div>
    <?php endif; ?>
    <a href="edit_profil.php" class="btn btn-sm btn-warning" style="font-weight: bold; color: white;">Edit Profil</a>
    <a href="proses_logout.php"class="btn btn-sm btn-primary" style="font-weight: bold; color: white;">Logout</a>
    <a href="dashboardadmin.php" class="btn btn-sm btn-danger" style="font-weight: bold; color: white;">Batal</a>
</div>

<!-- Footer -->
<div class="footer">
    <span>&copy; <script> document.write(new Date().getFullYear()); </script> - Developed by <b><a target="_blank">Kelompok 4C</a></b></span>
</div>

<!-- Add links to Bootstrap and jQuery scripts at the end of the body for better performance -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>