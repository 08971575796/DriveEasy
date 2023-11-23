<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="images/logo/DriveEasy_putih.png" rel="icon">
  <title>Drive Easy - Ulasan</title>
  <link href="scss/bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="scss/bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
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
           
            <a class="collapse-item active" href="datapelanggan.php">Data Pelanggan</a>
            <a class="collapse-item" href="datamobildantransaksi.php">Data Mobil & Transaksi</a>
          </div>
        </div>
      </li>
      
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Ulasan
      </div>
     
      <li class="nav-item active">
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
        </nav>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ulasan Pelanggan</h1>
          </div>
          <div class="card">
  <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-light">Kritik & Saran</h6>
    <!-- Kolom Pencarian -->
    <div class="search-container">
      <input type="text" id="searchInput" class="form-control" placeholder="Cari...">
      <i class="fas fa-search search-icon"></i>
    </div>
  </div>
  <div>
    <?php
    // Koneksi ke database (gantilah dengan informasi koneksi Anda)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "driveeasy6";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil data ulasan dari database
    $sql = "SELECT * FROM ulasan";
    $result = $conn->query($sql);

    // Tutup koneksi database
    $conn->close();
    ?>

    <!-- Tampilkan data ulasan dalam HTML -->
    <?php
    if ($result->num_rows > 0) {
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID Ulasan</th>';
        echo '<th>ID User</th>';
        echo '<th>Ulasan</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["id_ulasan"] . '</td>';
            echo '<td>' . $row["id_user"] . '</td>';
            echo '<td>' . $row["text_ulasan"] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>Tidak ada ulasan.</p>';
    }
    ?>
  </div>
</div>
<style>
  /* Gaya untuk kolom pencarian */
  .search-container {
    position: relative;
    width: 200px; /* Sesuaikan lebar sesuai kebutuhan */
    margin-bottom: 10px;
  }

  .search-input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .search-icon {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    color: #555;
    cursor: pointer;
  }
</style>

<script>
  // Fungsi untuk melakukan pencarian dan filter tabel
  function searchTable() {
    // Mendapatkan nilai input pencarian
    var input = document.getElementById('searchInput').value.toUpperCase();

    // Mendapatkan baris-baris data pada tabel
    var table = document.querySelector('.card table');
    var rows = table.getElementsByTagName('tr');

    // Iterasi melalui setiap baris tabel
    for (var i = 1; i < rows.length; i++) { // Dimulai dari 1 untuk menghindari baris header
      var rowData = rows[i].getElementsByTagName('td');
      var found = false;

      // Iterasi melalui setiap kolom data pada baris
      for (var j = 0; j < rowData.length; j++) {
        // Cek apakah nilai dalam kolom mengandung input pencarian
        if (rowData[j]) {
          var cellValue = rowData[j].textContent || rowData[j].innerText;
          if (cellValue.toUpperCase().indexOf(input) > -1) {
            found = true;
            break;
          }
        }
      }

      // Menyembunyikan atau menampilkan baris berdasarkan hasil pencarian
      if (found) {
        rows[i].style.display = '';
      } else {
        rows[i].style.display = 'none';
      }
    }
  }

  // Menambahkan event listener untuk memanggil fungsi pencarian saat nilai input berubah
  document.getElementById('searchInput').addEventListener('input', searchTable);
</script>



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

  <script src="scss/bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="scss/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="scss/bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="scss/bootstrap/vendor/chart.js/Chart.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>
</body>

</body>

</html>