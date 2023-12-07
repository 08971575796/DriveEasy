<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

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
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            overflow: hidden; /* Disable scrolling */
        }

    
    .text-input {
      position: relative;
    }

    .password-toggle {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
    }
    
    @media (max-width: 767px) {
            /* Adjust styles for smaller screens */
            .text-wrapper {
                font-size: 1.5em;
            }

            /* Add more responsive styles as needed */
        }
    
  </style>
</head>

<body>

    <script src="js/jquery.min.js"></script>

    <div class="sign-in">
        <div class="div">
            <div class="overlap">
                <div class="element-being-happy"></div>
                <p class="welcome-to-driveeasy">
                    <span class="text-wrapper">Welcome to <br /></span> <span class="span">DriveEasy</span>
                </p>
            </div>

            <form method="POST" action="proseslogin.php">
                <div class="group">
                    <div class="frame">
                        <div class="frame-2">
                            <div class="text-wrapper-2">Login</div>
                            <div class="frame-3">
                                <div class="text-input">
                                    <div class="text-wrapper-3">Email</div>
                                    <div class="overlap-group-wrapper">
                                        <div class="overlap-group"><div ><input type="email" class="overlap-group" id="floatingInput" placeholder="Email" name="email" >
                                    </div>
                                </div>
                                <div class="text-input">
                                <div class="text-wrapper-3">Password</div>
                                <div class="overlap-group-wrapper">
                                    <div class="overlap-group">
                                    <div class="bagilink-id-username"></div>
                                    <input type="password" class="overlap-group" id="floatingPassword" placeholder="Password" name="password">
                                    <img class="password-toggle" id="toggleButton" src="images/ant-design-eye-outlined.svg" onclick="togglePassword()" style="width: 24px; height: 24px;">
                                    </div>
                                </div>
                                </div>
                                <script>
                                function togglePassword() {
                                    var passwordInput = document.getElementById("floatingPassword");
                                    var toggleButton = document.getElementById("toggleButton");

                                    if (passwordInput.type === "password") {
                                    passwordInput.type = "text";
                                    toggleButton.src = "images/ant-design-eye-hide.png"; // Ganti dengan gambar mata terbuka
                                    } else {
                                    passwordInput.type = "password";
                                    toggleButton.src = "images/ant-design-eye-outlined.svg"; // Ganti dengan gambar mata tertutup
                                    }
                                }
                                </script>
                                    
                                        <button class="button">
                                            <div class="btn btn-warning" style="font-weight: bold; color: black;">Login</div>
                                        </button>
                                        <a href="index.php" class="btn btn-sm btn-danger" style="font-weight: bold; color: white;">Batal</a>
                                        <a href="lupapassword.php" class="text-wrapper-4">Lupa Password?</a>
                                        <p class="not-registered-yet">
                                            <span class="text-wrapper-6">Belum Punya Akun?</span>
                                            <a href="register.php">
                                                <span class="text-wrapper-7">Buat Akun</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <
                </div>
            </form>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
