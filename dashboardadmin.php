<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="images/logo/DriveEasy_putih.png" rel="icon">
  <title>DriveEasy - Dashboard</title>
  <link href="scss/bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="scss/bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
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
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboardadmin.php">
        <div class="sidebar-brand-icon">
          <img src="images/logo/DriveEasy_putih.png">
        </div>
        <div class="sidebar-brand-text mx-3">Drive Easy</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="dashboardadmin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Pendataan
      </div>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Tabel</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="datapelanggan.php">Data Pelanggan</a>
            <a class="collapse-item" href="datamobildantransaksi.php">Data Mobil & Transaksi</a>
          </div>
        </div>
      </li>
  
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Ulasan
      </div>
     
      <li class="nav-item">
        <a class="nav-link" href="ulasanpelanggan.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Kritik & Saran</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="images/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profil.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.html" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           
          </div>

          <div class="row mb-3">
          <?php
              // Koneksi ke database
              $servername = "localhost";
              $username = "root"; // Ganti dengan username MySQL Anda
              $password = ""; // Ganti dengan password MySQL Anda
              $dbname = "driveeasy2"; // Ganti dengan nama database Anda

              $conn = new mysqli($servername, $username, $password, $dbname);

              // Cek koneksi
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }

              // Query untuk mengambil nilai "Data mobil" dari database
              $sql = "SELECT COUNT(*) as total_data FROM mobil";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  $totalDataMobil = $row['total_data'];
              } else {
                  $totalDataMobil = 0;
              }

              // Tutup koneksi
              $conn->close();
              ?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Data mobil</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalDataMobil; ?></div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Data Transaksi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Data Pelanggan</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">20</div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Data Ulasan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Invoice Example -->
            <div class="col-xl-8 col-lg-7 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
                  <a class="m-0 float-right btn btn-danger btn-sm" href="datapelanggan.php">View More <i
                      class="fas fa-chevron-right"></i></a>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Password</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>D001</td>
                        <td>Andhung</td>
                        <td>Bagor, Nganjuk</td>
                        <td>081234567890</td>
                        <td>Akusuma123</td>
                      
                      </tr>
                      <tr>
                        <td>D002</td>
                        <td>Iqbal</td>
                        <td>Mangundikaran, Nganjuk</td>
                        <td>081234567890</td>
                        <td>iqbal123</td>
                       
                      </tr>
                      <tr>
                        <td>D003</td>
                        <td>Yoga</td>
                        <td>Jatikalen, Nganjuk</td>
                        <td>081234567890</td>
                        <td>yoga123</td>
                       
                      </tr>
      
                      <tr>
                        <td>D004</td>
                        <td>Ardi</td>
                        <td>Loceret, Nganjuk</td>
                        <td>081234567890</td>
                        <td>ardi123</td>
                       
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
            <!-- Message From Customer-->
            <div class="col-xl-4 col-lg-5 ">
              <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-light">Kritik & Saran</h6>
                </div>
                <div>
                <div class="customer-message align-items-center">
                  <a class="font-weight-bold" href="#">
                    <div class="text-truncate message-title">Tarif termurah dibanding sewa mobil manapun, kondisi mobil yg selalu bersih,wangi,dan keluaran terbaru, serta pelayanan yg sangat ramah menjadikan Rizky Shafira selalu diminati.Benar2 sewa mobil terbaik di Nganjuk</div>
                    <div class="small text-gray-500 message-time font-weight-bold">Septia Andini · Sukomoro, Nganjuk</div>
                  </a>
                </div>
                <div class="customer-message align-items-center">
                  <a href="#">
                    <div class="text-truncate message-title">Harga TerMurah dibandingkan Sewa Mobil yang lain, pelayanan juga ramah,mobilnya bersih dan baru semua. Recommended buat kalian yang cari sewa mobil di area Nganjuk
                    </div>
                    <div class="small text-gray-500 message-time">Shafira Nasywa · Pace, Nganjuk</div>
                  </a>
                </div>
                <div class="customer-message align-items-center">
                  <a class="font-weight-bold" href="#">
                    <div class="text-truncate message-title">Pengalaman sewa disini sangat memuaskan selalu melayani dengan ramah sesuai kebutuhan dan sudah di jelaskan secara rinci mengenai BBM maupun km. Mobil bersih unit terbaru manteppppppp
                    </div>
                    <div class="small text-gray-500 message-time font-weight-bold">Ike Dyah A · Bagor, Nganjuk</div>
                  </a>
                </div>
                <div class="customer-message align-items-center">
                  <a class="font-weight-bold" href="#">
                    <div class="text-truncate message-title">mantab jiwa
                    </div>
                    <div class="small text-gray-500 message-time font-weight-bold">Septian Yoga · Kertosono, Nganjuk</div>
                  </a>
                </div>
                <div class="card-footer text-center">
                  <a class="m-0 small text-primary card-link" href="ulasanpelanggan.php">View More <i
                      class="fas fa-chevron-right"></i></a>
                </div>
              </div>
              </div>
            </div>
          </div>
         

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a target="_blank">Kelompok 4C</a></b>
            </span>
          </div>
        </div>

      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="scss/bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="scss/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="scss/bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="scss/bootstrap/vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  

<?php
  include("koneksi.php");
$sql = "SELECT * FROM loginadmin"; // Pengambilan data dari tabel admin
$result = $conn->query($sql);

// Tutup koneksi
$conn->close();
?>
</body>

</html>