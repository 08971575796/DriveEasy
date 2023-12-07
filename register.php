<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Daftar Akun Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    /*.text-wrapper-4 {
        margin-top: -70px; /* Sesuaikan nilai margin-top sesuai kebutuhan Anda 
    }*/

    .already-have-an {
        margin-top: 30px; /* Sesuaikan nilai margin-top sesuai kebutuhan Anda */
    }
    
    
</style>

  </head>
  <body>
    <!-- END nav -->
    <div class="container-fluid">

        <form method="POST" action="prosesdaftar.php" autocomplete="off" name="register" onsubmit="return validateForm()">
            <div class="sign-up">
                <div class="div">
                    <div class="overlap">
                        <div class="element-being-happy"></div>
                        <p class="welcome-to-driveeasy">
                            <span class="text-wrapper">Welcome to <br /></span> <span class="span">DriveEasy</span>
                        </p>
                    </div>
    
                    <form method="POST" action="prosesdaftar.php" autocomplete="off" name="register">
                    <div class="frame">
                        <div class="frame-2">
                            <div class="text-wrapper-2">Daftar Akun</div>
                            <div class="frame-3">
                                <div class="text-input">
                                    <div class="text-wrapper-3">Username</div>
                                    <div class="overlap-group-wrapper">
                                        <div class="Username"></div><input type="username" class="overlap-group" id="floatingInput" placeholder="Username" name="username" >
                                    </div>
                                </div>
                                <div class="text-input">
                                    <div class="text-wrapper-3">Email</div>
                                    <div class="group">
                                        <div class="Email"><div ><input type="email" class="overlap-group" id="floatingInput" placeholder="Email" name="email">
                                        </div>
                                </div>
                                <!-- Tambahkan input field untuk kode unik -->
    <div class="text-input">
        <div class="text-wrapper-3">Kode Unik</div>
        <div class="overlap-group-wrapper">
            <div class="Kode-Unik"></div>
            <input type="text" class="overlap-group" id="kodeUnik" placeholder="Masukkan Kode Unik" name="kodeUnik">
        </div>
    </div>
    
                                <div class="text-input">
                                    <div class="text-wrapper-3">Password</div>
                                    <div class="group">
                                        <div class="overlap-group">
                                            <div class="password-container">
                                                <input type="password" class="overlap-group" id="floatingPassword" placeholder="Password" name="password">
                                                <img class="ant-design-eye" id="toggleButton" src="images/ant-design-eye-outlined.svg" onclick="togglePassword()">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
        function togglePassword() {
            var passwordInput = document.getElementById("floatingPassword");
            var toggleButton = document.getElementById("toggleButton");
    
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleButton.src = "images/ant-design-eye-hide.png";
            } else {
                passwordInput.type = "password";
                toggleButton.src = "images/ant-design-eye-outlined.svg";
            }
        }
    
        // Tambahkan fungsi untuk memeriksa kode unik sebelum mengirim formulir
        function validateForm() {
            var kodeUnikInput = document.getElementById("kodeUnik").value;
    
            // Ganti 'yourSecretCode' dengan kode unik yang diizinkan
            if (kodeUnikInput !== "08971575796") {
                alert("Kode unik tidak valid");
                return false;
            }
    
            return true;
        }
    </script>
    
                                <div class="text-wrapper-4">
                            <button class="button"><div class="btn btn-warning" style="font-weight: bold; color: black;">Daftar</div></button>
                        </div>
    </form>
                        <p class="already-have-an">
                            <span class="text-wrapper-4">Sudah Punya Akun? </span> 
                            <a href="login.php">
                                <span class="text-wrapper-5">Sign In</div></span>
                            </a>
                        </p>
                    </form>
                    </div>
                </div>
            </div>
    </div>

        <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>