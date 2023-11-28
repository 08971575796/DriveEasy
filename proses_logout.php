<?php
session_start(); // Start the session

// Hapus semua variabel sesi
$_SESSION = array();

// Hapus cookie sesi jika ada
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}
$_SESSION ['logout_message'] = "logoutberhasil";
// Hancurkan sesi
session_destroy();

// Redirect ke halaman login atau halaman lain yang sesuai
header("location: login.php");
exit();
?>
