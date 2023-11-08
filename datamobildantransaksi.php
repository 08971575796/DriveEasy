<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="images/logo/DriveEasy_putih.png" rel="icon">
  <title>Drive Easy - Data Transaksi</title>
  <link href="scss/bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="scss/bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="scss/bootstrap/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
      <li class="nav-item">
        <a class="nav-link" href="dashboardadmin.html">
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
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="images/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Andhung Gusti</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
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
            <h1 class="h3 mb-0 text-gray-800">Data Mobil & Transaksi</h1>
          </div>
          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
                  <a href="tambahdatamobil.php" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Nama</th>
                        <th>Merek</th>
                        <th>Warna</th>
                        <th>Tahun</th>
                        <th>Tempat Duduk</th>
                        <th>Harga Sewa</th>
                        <th>Action</th>
                      
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Nama</th>
                        <th>Merek</th>
                        <th>Warna</th>
                        <th>Tahun</th>
                        <th>Tempat Duduk</th>
                        <th>Harga Sewa</th>
                        <th>Action</th>
                      
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>Xenia</td>
                        <td>Daihatsu</td>
                        <td>Hitam</td>
                        <td>2007</td>
                        <td>6 tempat duduk</td>
                        <td>300 Ribu</td>
                        <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                      </tr>
                      <tr>
                        <td>Inova Reborn</td>
                        <td>Toyota</td>
                        <td>Biru</td>
                        <td>2020</td>
                        <td>6 tempat duduk</td>
                        <td>350 Ribu</td>
                        <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                      </tr>
                      <tr>
                        <td>Jazz</td>
                        <td>Honda</td>
                        <td>Merah</td>
                        <td>2019</td>
                        <td>4 tempat duduk</td>
                        <td>250 Ribu</td>
                        <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                      </tr>
                      <tr>
                        <td>Fuso</td>
                        <td>Hino</td>
                        <td>Hijau</td>
                        <td>2007</td>
                        <td>2 tempat duduk</td>
                        <td>500 Ribu</td>
                        <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                  <a href="tambahdatatransaksi.php" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Nama</th>
                        <th>Jenis Mobil (Nopol)</th>
                        <th>Lama Sewa</th>
                        <th>Tanggal Sewa</th>
                        <th>Jumlah Bayar</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Nama</th>
                        <th>Jenis Mobil (Nopol)</th>
                        <th>Lama Sewa</th>
                        <th>Tanggal Sewa</th>
                        <th>Jumlah Bayar</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>Septian Yoga eruh</td>
                        <td>Inova Reborn (AG 4356 WF)</td>
                        <td>1 Hari</td>
                        <td>21 Oktober-22 Oktober</td>
                        <td>300 Ribu</td>
                        <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                      </tr>
                      <tr>
                        <td>Andhung Peyot</td>
                        <td>Jazz (AG 5567 XY)</td>
                        <td>12 Jam</td>
                        <td>21 Oktober-21 Oktober</td>
                        <td>250 Ribu</td>
                        <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                      </tr>
                      <tr>
                        <td>Ardhi Suseno</td>
                        <td>Avanza (AG 5471 VY)</td>
                        <td>1 Hari</td>
                        <td>22 Oktober-23 Oktober</td>
                        <td>200 Ribu</td>
                        <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                      </tr>
                      <tr>
                        <td>David MU</td>
                        <td>Xenia (AG 1231 GH)</td>
                        <td>1 Hari</td>
                        <td>22 Oktober-23 Oktober</td>
                        <td>200 Ribu</td>
                        <td><a href="#" class="btn btn-sm btn-primary">Edit</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
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
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>