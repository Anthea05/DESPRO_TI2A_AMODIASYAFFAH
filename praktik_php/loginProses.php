<?php
    include "koneksi.php";

    $username=$_POST['username'];
    $password=md5($_POST['password']);

    $query="SELECT * FROM user WHERE username='$username' and password='$password'";
    $result=mysqli_query($connect, $query);
    $cek=mysqli_num_rows($result);

    if($cek > 0){ // Jobsheet menggunakan if($cek) saja, tapi $cek > 0 lebih jelas
        echo "Anda berhasil login. silahkan menuju "; ?>
        <a href="homeAdmin.html">Halaman HOME</a>
    <?php
    }else{
        echo "Anda gagal login. silahkan "; ?>
        <a href="loginForm.html">Login kembali</a>
    <?php
        echo mysqli_error($connect);
    }
?>