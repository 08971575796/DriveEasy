<?php
include("koneksi.php");


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk menampilkan pelanggan
$sql = "SELECT * FROM data_pelanggan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id_pelanggan"] . "</td>
                <td>" . $row["nama"] . "</td>
                <td>" . $row["alamat"] . "</td>
                <td>" . $row["telepon"] . "</td>
                <td>" . $row["password"] . "</td>
                <td><a href='edit_pelanggan.php?id=" . $row["id"] . "'>Edit</a> | 
                    <a href='hapus_pelanggan.php?id=" . $row["id"] . "'>Hapus</a></td>
              </tr>";
    }
} else {
    echo "Tidak ada pelanggan.";
}

$conn->close();
?>
