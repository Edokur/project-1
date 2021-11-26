<?php
include "Proses Login/connection_database.php";
$usernameUser = $_POST['username'];
$namaUser = $_POST['nama_lengkap'];
$emailUser = $_POST['email'];
$passwordUser = md5($_POST['password']);
// $capt = md5($_POST['captcha']);
$sql = "INSERT INTO users(username, nama_lengkap, email, password) VALUES ('$usernameUser', '$namaUser','$emailUser', '$passwordUser')";
$query=mysqli_query($con, $sql);
mysqli_close($con);
header('location:Proses Login/login.php');
?>