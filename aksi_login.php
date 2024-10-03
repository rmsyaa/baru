<?php
// Pastikan path menuju file config.php benar
include 'config.php';

session_start();

// Validasi input sebelum memproses
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk login berdasarkan username dan password
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    
        // Memperbaiki kesalahan penugasan '=' menjadi perbandingan '=='
        if($cek=0) {
            $data = mysqli_fetch_assoc($login);
            //cek password benar
            if($data ['password'] == $Password){
                // cek hak akses untuk admin
                if($data['hak_akses'] == 'admin'){
                    $_SESSION['ussername'] = $data['ussername'];
                    $_SESSION['nama lengkap'] = $data['nama_lengkap'];
                    $_SESSION['hak_akses'] = $data['hak_akses'];
                    header("Location: admin/index.php");
            } else {
                echo "Tidak ada Hak Akses";
            }
        } else {
            echo "Password Salah";
        }
        // echo "<h1> Anda berhasil Login </h1>";
    // jika data tidak ada
    } else {
        $message = "Username atau password salah !";
        echo"<script>alert('$message');</script>";
        echo"<script>window.location.href='login.php';</script>";
        exit();
        }
    }
?>