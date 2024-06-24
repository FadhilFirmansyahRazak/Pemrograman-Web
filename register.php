<?php
   
   include 'koneksi.php';

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        $cek_user = mysqli_query($koneksi,"SELECT * FROM user WHERE email = '$email'");
        $cek_login = mysqli_num_rows($cek_user);

        if ($cek_login > 0) {
            echo "<script>
                alert('Email telah terdaftar');
                window.location = 'register.php';
            </script>";
        } else {
            if ($password1 != $password2) {
                echo "<script>
                alert('Konfirmasi Password Tidak Sesuai');
                window.location = 'register.php';
            </script>";
            }else {
                $password = password_hash($password1,PASSWORD_DEFAULT);  //UNTUK MENYAMBUNYIKAN PASSWORD
            mysqli_query($koneksi,"INSERT INTO user VALUES('','$nama','$email','$password')");
            echo "<script>
                alert('Data Berhasil Dikirim');
                window.location = 'login.php';
            </script>";
            }
           
        } 
    }


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun Baru</title>
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="wrapper">
        <h1>Daftar Akun</h1>
        <form action="" method="POST">
            <div class="input-box">
                <input type="text" name="nama" placeholder="Masukkan Nama Anda" required>
                <i class="material-icons">account_circle</i>
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Masukkan Email Anda" required>
                <i class="material-icons">mail_outline</i>
            </div>
            <div class="input-box">
                <input type="password" name="password1" placeholder="Masukkan Password Anda" required>
                <i class="material-icons">https</i>
            </div>
            <div class="input-box">
                <input type="password" name="password2" placeholder="Konfirmasi Password Anda" required>
                <i class="material-icons">https</i>
            </div>
            <button type="submit" name="submit" class="btn">Daftar</button>
        
            <div class="register-link">
                <p>Sudah punya akun? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>