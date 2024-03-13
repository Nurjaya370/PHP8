<?php
// Include koneksi ke database
include 'koneksi.php';

// Inisialisasi variabel error
$error = "";

// Cek apakah data dari formulir login telah terkirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari formulir login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Enkripsi password yang dimasukkan oleh pengguna
    $encrypted_password = md5($password); 

    // Query untuk memeriksa apakah username dan password valid
    $query = "SELECT * FROM user WHERE username='$username' AND password='$encrypted_password'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        // Jika terjadi kesalahan dalam eksekusi query, tampilkan pesan kesalahan
        die("Error: " . mysqli_error($koneksi));
    }

    // Periksa apakah hasil query menghasilkan baris data
    if (mysqli_num_rows($result) == 1) {
        // Ambil data pengguna
        $user_data = mysqli_fetch_assoc($result);

        // Mulai sesi
        session_start();

        // Simpan nama pengguna dalam sesi
        $_SESSION['username'] = $user_data['username'];
        
        // Jika login berhasil, redirect ke halaman dashboard
        header("Location: dashboard.php");
        exit(); // Pastikan kode setelah redirect tidak dijalankan
    } else {
        // Jika login gagal, tampilkan pesan kesalahan
        $error = "Username atau password salah.";
    }
}
// Tutup koneksi ke database
mysqli_close($koneksi);

// Redirect kembali ke halaman login jika tidak ada data POST atau terjadi error
header("Location: login.php?error=" . urlencode($error));
exit();
?>
