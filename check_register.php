<?php
include "Proses Login/connection_database.php";
$usernameUser = $_POST['username_user'];
$namaUser = $_POST['nama_user'];
$emailUser = $_POST['email_user'];
$passwordUser = md5($_POST['password_user']);
// $capt = md5($_POST['captcha']);
$sql = "INSERT INTO users(username, nama_lengkap, email, password) VALUES ('$usernameUser', '$namaUser','$emailUser', '$passwordUser')";
$query=mysqli_query($con, $sql);
mysqli_close($con);
header('location:Proses Login/login.php');
?>