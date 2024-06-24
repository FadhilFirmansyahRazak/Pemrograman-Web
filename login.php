<?php
session_start();
include 'koneksi.php';


//untuk melakukan jika sudah login maka akan terus login hingga di suruh logout//
// if (isset($_SESSION['login'])) {
//     header("location:index.php");
//     exit;
// }


if(isset($_POST['login'])) {
    $email = $_POST['em'];
    $password = $_POST['pass'];

    $_SESSION['login'] = $_POST['login'];

    $ambil = mysqli_query($koneksi,"SELECT * FROM user WHERE email = '$email'");

    if(mysqli_num_rows($ambil) === 1) {
        $data = mysqli_fetch_assoc($ambil);

        if(password_verify($password,$data['password'])) {
            $_SESSION['nama'] = $data['nama'];
            header("location:index.php");
            exit();
        }else {
            echo"<script>
            alert('Password Anda Salah');
            window.location = 'login.php';
        </script>";
        }
    }else {
        echo"<script>
            alert('Email Atau Password Anda Salah');
            window.location = 'login.php';
        </script>";
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="wrapper">
        <form action="" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="em" placeholder="Email" required>
                <i class="material-icons">mail_outline</i>
            </div>
            <div class="input-box">
                <input type="password" name="pass" placeholder="password" required>
                <i class="material-icons">https</i>
            </div>

            <div class="remember-forgot">
                <label>
                    <input type="checkbox"> Remember me
                </label>
                <a href="#">Lupa password</a>
            </div>
            <a href="index.html">
                <button type="submit" name="login" class="btn">Login</button>
            </a>

            <div class="register-link">
                <p>Tidak punya akun? <a href="register.php">Buat Akun</a> </p>
            </div>
        </form>
    </div>
</body>
</html>
