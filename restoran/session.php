<?php
session_start()
$username = $_SESSION['username'];
if(empty($_SESSION['username'])){
    header("location:login.php?pesan=belum_login");
}
?>

<html>
<head>
    <title>
        Halaman Session
    </title>
</head>
<body>
    <center>
        <h1>Selamat datang <?=$username ?> </h1>
        <br>
        <a href="logout.php"><button> <b><i>logout</button></i></b>
        
    </center>
</body>
</html>