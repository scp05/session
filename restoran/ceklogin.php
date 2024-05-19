<?php
    session_start();
    $query=new mysqli('localhost','root','password','database');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'") or die (mysqli_error($koneksi));

    $cek = mysqli_num_rows($query);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location:session.php");
    } 
       else{
        header("location:login.php?pesan=gagal");
       }
?>
