document.addEventListener("DOMContentLoaded", function () {
    // Fungsi untuk mendapatkan detail profil dari server
    function getProfileDetails() {
        // Lakukan permintaan AJAX atau fetch ke server untuk mendapatkan data profil
        // Gantilah dengan metode yang sesuai dengan backend Anda
        // Contoh menggunakan fetch:
        fetch('/api/profile', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                // Sertakan token otentikasi jika diperlukan
                'Authorization': 'Bearer ' + YOUR_ACCESS_TOKEN,
            },
        })
        .then(response => response.json())
        .then(data => {
            // Tampilkan detail profil di dalam formulir
            displayProfileDetails(data);
        })
        .catch(error => console.error('Error:', error));
    }

    // Fungsi untuk menampilkan detail profil di dalam formulir
    function displayProfileDetails(profile) {
        const profileDetailsDiv = document.getElementById('profile-details');
        // Buat HTML sesuai kebutuhan untuk menampilkan detail profil
        const html = `
            <p>Useradmin: ${profile.useradmin}</p>
            <p>Email: ${profile.email}</p>
            <p>Password: ${profile.password}</p>
            <!-- Tambahkan elemen HTML lainnya sesuai kebutuhan -->
        `;
        // Tampilkan HTML di dalam elemen dengan id 'profile-details'
        profileDetailsDiv.innerHTML = html;
    }

    // Panggil fungsi untuk mendapatkan dan menampilkan detail profil
    getProfileDetails();
});
