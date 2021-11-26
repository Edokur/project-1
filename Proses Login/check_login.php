<?php
include "connection_database.php";
$emailUser = $_POST['email_user'];
$passwordUser = md5($_POST['password_user']);
$sql="SELECT * FROM users WHERE email='$emailUser' AND password='$passwordUser'";
$login=mysqli_query($con,$sql);
$ketemu=mysqli_num_rows($login);
$r= mysqli_fetch_array($login);

if ($ketemu > 0){
    header("Location : ../dashboard.php");
}
else{
    echo "<center>Login gagal! username & password tidak benar<br>";
    echo "<a href=login.php><b>ULANGILAGI</b></a></center>";
}
mysqli_close($con);
?>