
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="images/logo/DriveEasy_putih.png" rel="icon">
  <title>Drive Easy - Tambah Data Mobil</title>
  <link href="scss/bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="scss/bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <style>
    #carForm input {
        width: 200px; /* Set lebar input menjadi 100% dari lebar parent */
        padding: 8px; /* Tambahkan padding agar input terlihat lebih baik */
        box-sizing: border-box; /* Sertakan padding dalam perhitungan lebar total */
        margin-bottom: 10px; /* Tambahkan margin bawah untuk memberikan ruang antar input */
    }

    #carForm button {
        width: 100%; /* Set lebar tombol menjadi 100% dari lebar parent */
        padding: 8px;
        box-sizing: border-box;
    }
  
/* CSS untuk animasi sidebar brand */
@keyframes flipAnimation {
  0% {
    transform: perspective(400px) rotateY(0);
  }
  50% {
    transform: perspective(400px) rotateY(180deg);
  }
  100% {
    transform: perspective(400px) rotateY(360deg);
  }
}

/* Terapkan animasi putaran pada logo */
.sidebar-brand-icon img {
  animation: flipAnimation 2s linear infinite; /* Ubah durasi dan iterasi sesuai keinginan */
}

</style>

</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" style="background-color: #ffe688;" href="dashboardadmin.php">
        <div class="sidebar-brand-icon">
          <img src="images/Ellipse213.png">
        </div>
        <div class="sidebar-brand-text mx-3" style="color: #000;">Drive Easy</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="dashboardadmin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Pendataan
      </div>
      
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Tabel</span>
        </a>
        <div id="collapseTable" class="collapse show" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item active" href="datapelanggan.php">Data Pelanggan</a>
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
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top" style="background-color: #ffe688;">
        </nav>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Mobil</h1>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 
                </div>
                <div class="input-group mb-3">
                 
                  <form method="POST" action="prosestambahmobil.php">
                    <div class="mb-3" id="carForm">
                      <label for="exampleInputType1" class="form-label">Type</label>
                      <input type="text" class="form-control" id="exampleInputType1" name="type" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPlat1" class="form-label">Plat</label>
                        <input type="text" class="form-control" name="plat" id="exampleInputPlat1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputAlamat1" class="form-label">Warna</label>
                      <input type="nama" class="form-control" id="exampleInputAlamat1" name="warna">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputTelepon1" class="form-label">Tahun Produksi</label>
                      <input type="nama" class="form-control" id="exampleInputTelepon1" name="thn_produksi">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputTempatduduk1" class="form-label">Isi Silinder</label>
                      <input type="text" class="form-control" id="exampleInputTempatduduk1" name="isi_silinder" >
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputTelepon1" class="form-label">Bahan Bakar</label>
                      <input type="nama" class="form-control" id="exampleInputTelepon1" name="bahan_bakar" >
                      <div class="mb-3">
                      <label for="exampleInputJumlahKursi1" class="form-label">Jumlah Kursi</label>
                      <input type="nama" class="form-control" id="exampleInputJumlahKursi1" name="jumlah_kursi" >
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputhargasewa1" class="form-label">Harga Sewa</label>
                      <input type="text" class="form-control" id="exampleInputhargasewa1" name="harga_sewa" >
                    </div>
                    <input type="submit" value="Tambah Mobil" class="btn btn-warning">
                    <a href="datamobildantransaksi.php" class="btn btn-sm btn-danger">Batal</a>
                  </form>
                  </div>
                     <div class="table-responsive">
                     <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                      </body>
                      </table>
              
                </div>
                <div class="card-footer"></div>
                
              </div>
            </div>
          </div>
          <!--Row-->

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
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>