<?php
include ("../koneksi.php");
if(isset($_POST['username']) && isset ($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($username) && !empty ($password)) {
        $sql = mysqli_query($koneksi, "SELECT * FROM login_admin WHERE
        username='$username' AND password='$password';");
        $ketemu = mysqli_num_rows($sql);
        if ($ketemu == 1) {
            session_start();
            while ($user = mysqli_fetch_assoc($sql)) {
                $username = $user[1] = $username;
                $password = $user[2] = $password;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header("location:halaman_admin.php");
            }
        }else {

            echo "<script>alert('Username atau password salah!'); </script>";
        }
    }else {
        echo "<script>alert('Daftar dulu!'); </script>";
    }
}

?>