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

                      // Periksa apakah parameter ID ada dalam URL
                      if (isset($_GET['id'])) {
                          $id = $_GET['id'];

                          // Hapus data transaksi dari database
                          $sql = "DELETE FROM booking WHERE id_booking = $id";

                          if ($conn->query($sql) === TRUE) {
                            ?>
                            <script>
                            alert("<?php echo "Data berhasil di hapus"?>");
                            window.location.replace('datamobildantransaksi.php');
                          </script>
                          <?php
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }
                      } else {
                          echo "ID transaksi tidak ditemukan";
                      }

                      // Tutup koneksi database
                      $conn->close();
                      ?>