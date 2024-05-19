<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
</head>
<body>
    <h2>LOGIN</h2>
    <br>
    <!--cek pesan notifikasi-->
    <?php
     if(isset($_GET['pesan'])){
       if($_GET['pesan']=="gagal"){
        echo "Login gagal, username dan password salah!";
            } else if($_GET['pesan']=="logout"){
             echo "anda telah login";
                 } else if($_GET['pesan']=="belum_login"){
                 echo "anda harus login terlabih dahulu untuk mengakses halama admin";
                 }
     }
    
    ?>
    <br><br>
    <h1>Silahkan Login</h1>
    <form action="ceklogin.php" method="POST">
        </table>
        username <br>
        <input type="text" name="username" placeholder="masukkan username"><br>
        password <br>
        <input type="password" name="password" placeholder="masukkan password"><br>
        <input type="submit" value="login">
        
     </form>
</body>
</html>