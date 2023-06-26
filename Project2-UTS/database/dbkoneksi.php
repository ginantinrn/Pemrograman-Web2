<?php
$servername = "localhost";
$database = "dbmotor";
$username = "root";
$password = "";


// mebuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// // cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
