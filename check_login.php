<?php
include "connection_database.php";
$emailUser = $_POST['email_user'];
$passwordUser = md5($_POST['pasword_user']);
$sql="SELECT * FROM users WHERE email='$emailUser' AND password='$passwordUser'";
$login=mysqli_query($con,$sql);
$ketemu=mysqli_num_rows($login);
$r= mysqli_fetch_array($login);

if ($ketemu > 0){
    session_start();
    $_SESSION['emailUser'] = $r['email_user'];
    $_SESSION['passUser'] = $r['password_user'];
    echo"USER BERHASIL LOGIN<br>";
    echo "email User =",$_SESSION['emailUser'],"<br>";
    echo "password User=",$_SESSION['passUser'],"<br>";
    echo "<a href=logout.php><b>LOGOUT</b></a></center>";
}
else{
    echo "<center>Login gagal! username & password tidak benar<br>";
    echo "<a href=index.php><b>ULANGILAGI</b></a></center>";
}
mysqli_close($con);
?>