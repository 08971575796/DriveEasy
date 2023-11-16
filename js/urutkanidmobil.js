// Fungsi untuk menambah data mobil
function tambahData() {
    // ... (logika untuk menambah data)

    // Setelah menambah data, panggil fungsi untuk memperbarui ID
    updateIDs();
}

// Fungsi untuk menghapus data mobil
function hapusData(idMobil) {
    // ... (logika untuk menghapus data)

    // Setelah menghapus data, panggil fungsi untuk memperbarui ID
    updateIDs();
}

// Fungsi untuk memperbarui ID setelah penambahan atau penghapusan data
function updateIDs() {
    const rows = document.querySelectorAll('#dataTable tbody tr');

    rows.forEach((row, index) => {
        const idCell = row.querySelector('td:first-child');
        idCell.textContent = index + 1; // Menggunakan index + 1 sebagai ID urut
    });
}

// Contoh penggunaan fungsi tambahData dan hapusData
tambahData();
tambahData();
hapusData(2);
