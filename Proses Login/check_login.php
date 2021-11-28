<?php
// define variables and set to empty values
$emailErr = $passErr = $captErr = "";
$email = $pass = $capt = "";

//Digunakan untuk  memvalidasi semua data supaya data tidak kosong
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email_user"]) | empty($_POST["password_user"]) |  (empty($_POST["captcha_code"]))) 
    {
        if (empty($_POST["email_user"])) {   //digunakan untuk mengecek email supaya tidak kosong 
            $emailErr = "Email harus diisi";
        }else {
            $email = test_input($_POST["email_user"]);
    
        // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Email tidak sesuai format"; 
            }
        }
    
        if (empty($_POST["password_user"])) {     //mengecek supaya website user tidak kosong
            $passErr = "Password tidak boleh kosong";
        }else {
            $pass = md5($_POST["password_user"]);
        }

        
        if (empty($_POST["captcha_code"])) {      //mengecek supaya gender wajib dipilih salah satu
            $captErr = "Harus di isi";
        }else {
            $capt = md5($_POST["captcha_code"]);
        }
    }
    include "connection_database.php";
    $emailUser = $_POST['email_user'];
    $passwordUser = md5($_POST['password_user']);
    $capt = md5($_POST['captcha_code']);
    
    $sql="SELECT * FROM users WHERE email='$emailUser' AND password='$passwordUser'";
    $sql2="UPDATE users SET captcha ='$captcha' where email ='$emailUser'";

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

?>