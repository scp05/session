<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "login";

$koneksi = new mysqli($hostname, $username, $password, $database);

if($koneksi -> connect_error){
    die('maaf koneksi gagal : '. $connect->connect_error);
}
?>