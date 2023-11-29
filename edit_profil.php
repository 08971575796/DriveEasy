<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .user-profile {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="checkbox"] {
            margin-left: 5px;
        }
                body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .user-profile {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
            border: none; /* Menghilangkan border pada tabel */
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: none; /* Menghilangkan border pada sel tabel */
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #ffc107;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="checkbox"] {
            margin-left: 5px;
        }
        
    .custom-button {
        background-color: #dc3545;
        color: white;
        padding: 8px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .custom-button:hover {
        background-color: #2980b9;
    }
</style>
    
</head>

<body>
    <?php
    session_start(); // Mulai sesi
    ?>
    <?php
    // Periksa apakah pengguna sudah login
    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit();
    }

    // Ambil nilai email dari sesi
    $email = $_SESSION['email'];

    // Koneksi ke basis data (gantilah dengan informasi koneksi yang sesuai)
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "driveeasy6";

    $conn = mysqli_connect($host, $user, $password, $database);

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
    $useradmin = $row['useradmin'];
    $password = $row['password']; // Pastikan untuk tidak menampilkan password secara langsung

    // Tutup koneksi basis data
    ?>
    <title>Admin Profil</title>
</head>

<body>
    <div class="user-profile">
        <h2>Admin Profil</h2>
        <form action="proses_edit_profil.php" method="post">
            <table>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
                </tr>
                <tr>
                    <td>Useradmin:</td>
                    <td><input type="text" name="useradmin" value="<?php echo $useradmin; ?>"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" id="password" value="<?php echo $password; ?>">
                        <input type="checkbox" onclick="togglePasswordVisibility()"> Lihat Password
                    </td>
                </tr>
            </table>
            <input type="submit" style="font-weight: bold; color: white;" value="Simpan Perubahan">
            <button type="button" class="custom-button" style="font-weight: bold; color: white;" onclick="batal()">Batal</button>
        </form>
    </div>
    <script>
    function batal() {
        // Redirect atau lakukan aksi lainnya saat tombol "Batal" diklik
        window.location.href = "profil.php";
    }
</script>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
    <?php
    // ... (Kode PHP tetap tidak berubah)
    ?>
</body>


</html>
