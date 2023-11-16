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
  <style>
        #editForm {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            overflow-y: auto; /* Tambahkan properti ini untuk menambahkan scroll */
            max-height: 80vh; /* Atur tinggi maksimum form (80% dari tinggi viewport) */
        }

        #editForm label {
            display: block;
            margin-bottom: 8px;
        }

        #editForm input {
            width: 250px;
            padding: 8px;
            margin-bottom: 16px;
        }

        #editForm button {
            padding: 8px;
            cursor: pointer;
        }
        #dataTable th, #dataTable td {
    border: 0px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px;
    text-align: center;
    width: 100px; /* Ganti dengan lebar yang sesuai */
}

    </style>
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
                        <th>Id</th>
                        <th>Nama Mobil</th>
                        <th>Merek</th>
                        <th>Warna</th>
                        <th>Tahun</th>
                        <th>Cc</th>
                        <th>Bahan Bakar</th>
                        <th>Harga Sewa</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tfoot>
                     
              <table class="table align-items-center table-flush" id="dataTable">
                <!-- ... (seperti sebelumnya) -->
          <tbody>
                    <!-- Data Mobil akan ditampilkan di sini melalui JavaScript -->
                </tbody>
              </table>
              <div id="editForm">
        <h2>Edit Data Mobil</h2>
        <form id="carForm">
            <input type="hidden" id="editId" name="editId">
            <label for="editNamaMobil">Nama Mobil:</label>
            <input type="text" id="editNamaMobil" name="editNamaMobil" required><br>
            <label for="editMerk">Merek:</label>
            <input type="text" id="editMerk" name="editMerk" required><br>
            <label for="editWarna">Warna:</label>
            <input type="text" id="editWarna" name="editWarna" required><br>
            <label for="editTahun">Tahun:</label>
            <input type="number" id="editTahun" name="editTahun" required><br>
            <label for="editCc">Cc:</label>
            <input type="text" id="editCc" name="editCc" required><br>
            <label for="editBahanBakar">Bahan Bakar:</label>
            <input type="text" id="editBahanBakar" name="editBahanBakar" required><br>
            <label for="editHargaSewa">Harga Sewa:</label>
            <input type="text" id="editHargaSewa" name="editHargaSewa" required><br>
            <!-- Add other input fields as needed -->
            <button type="submit" class="btn btn-sm btn-primary">Simpan Perubahan</button>
            <button type="button" class="btn btn-sm btn-danger" onclick="cancelEdit()">Batal</button>
        </form>
    </div>
              </div>
              </div>
              </div>
              </div>

              <!-- Script untuk menampilkan data mobil dari database pada tabel -->
              <!-- Script untuk menampilkan data mobil dari database pada tabel -->
              <script>
        function displayCarData() {
            // Fetch data from server and populate the table
            fetch('get_car_data.php')
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.querySelector('#dataTable tbody');
                    tableBody.innerHTML = '';

                     data.forEach((car, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${index + 1}</td>
                    
                    <td>${car.nama_mobil}</td>
                    <td>${car.merk}</td>
                    <td>${car.warna}</td>
                    <td>${car.tahun}</td>
                    <td>${car.cc}</td>
                    <td>${car.bahan_bakar}</td>
                    <td>${car.harga_sewa}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary" onclick="editData(${car.id_mobil})">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger" onclick="hapusData(${car.id_mobil})">Hapus</a>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        })
                .catch(error => console.error('Error:', error));
        }

        function hapusData(idMobil) {
            if (confirm("Apakah Anda yakin ingin menghapus data mobil ini?")) {
                fetch(`proseshapusdatamobil.php?id=${idMobil}`, {
                    method: 'DELETE',
                })
                    .then(response => response.text())
                    .then(message => {
                        alert(message);
                        displayCarData();
                    })
                    .catch(error => console.error('Error:', error));
            }
        }

        function editData(idMobil) {
            // Fetch car data based on ID
            fetch(`get_car_by_id.php?id=${idMobil}`)
                .then(response => response.json())
                .then(car => {
                    // Populate the edit form with the retrieved data
                    document.getElementById('editId').value = car.id_mobil;
                    document.getElementById('editNamaMobil').value = car.nama_mobil;
                    document.getElementById('editMerk').value = car.merk;
                    document.getElementById('editWarna').value = car.warna;
                    document.getElementById('editTahun').value = car.tahun;
                    document.getElementById('editCc').value = car.cc;
                    document.getElementById('editBahanBakar').value = car.bahan_bakar;
                    document.getElementById('editHargaSewa').value = car.harga_sewa;
                    // Populate other form fields as needed

                    // Show the edit form
                    document.getElementById('editForm').style.display = 'block';
                })
                .catch(error => console.error('Error:', error));
        }
        
        function cancelEdit() {
            // Hide the edit form
            document.getElementById('editForm').style.display = 'none';
        }
         // Event listener for the edit form submission
         document.getElementById('carForm').addEventListener('submit', function (event) {
            event.preventDefault();

            // Get form data
            const formData = new FormData(event.target);

            // Send the updated data to the server for processing
            fetch('update_car_data.php', {
                method: 'POST',
                body: formData,
            })
                .then(response => response.text())
                .then(message => {
                    alert(message);
                    // Reload the table after updating data
                    displayCarData();
                    // Hide the edit form
                    document.getElementById('editForm').style.display = 'none';
                })
                .catch(error => console.error('Error:', error));
                
        });

        window.onload = displayCarData;
    </script>

            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                  
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
                      
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Nama</th>
                        <th>Jenis Mobil (Nopol)</th>
                        <th>Lama Sewa</th>
                        <th>Tanggal Sewa</th>
                        <th>Jumlah Bayar</th>
                       
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>Septian Yoga eruh</td>
                        <td>Inova Reborn (AG 4356 WF)</td>
                        <td>1 Hari</td>
                        <td>21 Oktober-22 Oktober</td>
                        <td>300 Ribu</td>
                       
                      </tr>
                      <tr>
                        <td>Andhung Peyot</td>
                        <td>Jazz (AG 5567 XY)</td>
                        <td>12 Jam</td>
                        <td>21 Oktober-21 Oktober</td>
                        <td>250 Ribu</td>
                       
                      </tr>
                      <tr>
                        <td>Ardhi Suseno</td>
                        <td>Avanza (AG 5471 VY)</td>
                        <td>1 Hari</td>
                        <td>22 Oktober-23 Oktober</td>
                        <td>200 Ribu</td>
                       
                      </tr>
                      <tr>
                        <td>David MU</td>
                        <td>Xenia (AG 1231 GH)</td>
                        <td>1 Hari</td>
                        <td>22 Oktober-23 Oktober</td>
                        <td>200 Ribu</td>
                       
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