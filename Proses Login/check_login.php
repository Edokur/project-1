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
            echo "<a href=index.php><b>ULANGILAGI</b></a></center>";
        }
        mysqli_close($con);
    }
<<<<<<< HEAD
=======
    include "connection_database.php";
    $emailUser = $_POST['email_user'];
    $passwordUser = md5($_POST['password_user']);
<<<<<<< HEAD
    $capt = md5($_POST["captcha_code"]);
    $sql="SELECT * FROM users WHERE email='$emailUser' AND password='$passwordUser'";
    $sql2="UPDATE users SET captcha ='$capt' where email ='$emailUser'";
    
=======
    $capt = md5($_POST['captcha_code']);
    
    $sql="SELECT * FROM users WHERE email='$emailUser' AND password='$passwordUser'";
    $sql2="UPDATE users SET captcha ='$captcha' where email ='$emailUser'";

>>>>>>> 7d89246e07db82c7839546080af1d0f1f1826b59
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
    }else{
        echo "<center>Login gagal! username & password tidak benar<br>";
        echo "<a href=login.php><b>ULANGILAGI</b></a></center>";
    }
    mysqli_close($con);
}else{
    echo "<script>
    alert('Kode Captcha tidak sesuai silahkan masukan kode yang sesuai');
    window.location.href = 'login.php';
    </script>";
    //   header("location: login.php");
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

>>>>>>> 4300a74f2cd51e50a466977f893c701db5fdfec6
?>