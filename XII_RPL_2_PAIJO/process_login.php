<?php
// Lakukan validasi pada username dan password yang diterima dari form login
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan validasi tambahan seperti verifikasi database, enkripsi password, dan sebagainya
    // Contoh sederhana untuk validasi username dan password
    if($username === 'Paijo' && $password === 'MrPaijo135'){
        // Jika login berhasil, atur session dan arahkan pengguna ke halaman selanjutnya
        session_start();
        $_SESSION['username'] = $username;
        header('Location: pasien.php');
        exit();
    } else {
        // Jika login gagal, arahkan pengguna kembali ke halaman login dengan pesan kesalahan
        header('Location: login.php?error=1');
        exit();
    }
} else {
    // Jika username atau password tidak diterima, arahkan pengguna kembali ke halaman login dengan pesan kesalahan
    header('Location: login.php?error=2');
}
?>