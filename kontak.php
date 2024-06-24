<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Mengecek apakah data telah dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Menyiapkan data untuk ditulis ke dalam file
    $data = "Nama: $name\nEmail: $email\nPesan: $message\n\n";

    // Menulis data ke dalam file.txt
    $file = 'Data_Kontak.txt';
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) === false) {
        echo "Error menulis ke file";
    } else {
        echo "Data berhasil ditulis ke file";
    }

    // Mengarahkan pengguna kembali ke halaman form dengan pesan sukses
    header("Location: index.html");
    exit();
}

// Menampilkan direktori kerja saat ini
echo getcwd();
?>
