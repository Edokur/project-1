<?php
session_start();
include "connection_database.php";
$emailUser = $_POST['email_user'];
$passwordUser = md5($_POST['password_user']);
$captcha = md5($_POST['captcha_code']);
$sql="SELECT * FROM users WHERE email='$emailUser' AND password='$passwordUser'";
$sql2="UPDATE users SET captcha ='$captcha' where email ='$emailUser'";

    if ($_POST["captcha_code"] == $_SESSION["captcha_code"]){
        $update=mysqli_query($con, $sql2);
        $login=mysqli_query($con,$sql);
        $ketemu=mysqli_num_rows($login);
        $r= mysqli_fetch_array($login);
        
        if ($ketemu > 0){
            session_start();
            $_SESSION['emailUser'] = $emailUser;
            $_SESSION['status'] = "login";
            echo"USER BERHASIL LOGIN<br>";
            header("location:../dashboard.php");
        }
        else{
            echo "<center>Login gagal! username & password tidak benar<br>";
            echo "<a href=login.php><b>ULANGILAGI</b></a></center>";
        }
        mysqli_close($con);
    }
?>