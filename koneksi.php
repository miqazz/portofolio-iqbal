<?php
$servername     = "localhost";
$username       = "root";
$password       = "";
$dbname         = "db_portofolio";

//membuat koneksi ke srver mysql

$conn= new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("koneksi eror : " . $conn->connect_error);
}

// echo "koneksi terhubung";