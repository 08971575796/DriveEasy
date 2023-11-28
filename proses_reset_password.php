<?php
// Koneksi ke database (gantilah dengan informasi koneksi yang benar)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "driveeasy6";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$email = $_POST['email'];

// Cek apakah email terdaftar di database
$sql_check_email = "SELECT * FROM loginadmin WHERE email='$email'";
$result_check_email = $conn->query($sql_check_email);

if ($result_check_email->num_rows > 0) {
    // Email ditemukan, buat link untuk mengubah password
    $reset_link = "http://localhost/carbook-master/form_password_baru.php? email=$email"; // Ganti dengan URL tautan ubah password Anda
    $subject = "Reset Password";
    $message = "Klik tautan berikut untuk mengubah password Anda: $reset_link";

    // Konfigurasi PHPMailer
    require "Mail/phpmailer/PHPMailerAutoload.php";
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
     // h-hotel account
     $mail->Username = 'iqbalfauzi0897155796@gmail.com';
     $mail->Password = 'nwfb nixz npdf vqzs';

     // send by h-hotel email
     $mail->setFrom('iqbalfauzi0897155796@gmail.com', 'Drive Easy');
     // get email from input
     $mail->addAddress($_POST["email"]);
     //$mail->addReplyTo('lamkaizhe16@gmail.com');
    $mail->Subject = $subject;
    $mail->Body = $message;

    // Cek isi pesan sebelum mengirim
    echo "Isi Pesan: $message";


    // Kirim email
    if ($mail->send()) {
        ?>
        <script>
        alert("<?php echo "Email berhasil di kirim, silahkan cek email anda dan masuk ke link yang telah di berikan"?>");
        window.location.replace('lupapassword.php');
        </script>
        <?php
    } else {
        ?>
        <script>
        alert("<?php echo "Email gagal di kirim, coba lagi!"?>");
        window.location.replace('lupapassword.php');
        . $mail->ErrorInfo;
        </script>
        <?php
    }
    } else {
        ?>
        echo  <script>
        alert("<?php echo "Email tidak terdaftar"?>");
        window.location.replace('lupapassword.php');
    </script>
    <?php
    }
$conn->close();
?>
