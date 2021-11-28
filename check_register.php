<?php
// define variables and set to empty values
$namaErr = $userErr = $emailErr = $passErr = $pass2Err = $captErr = "";
$nama = $user = $email = $pass = $pass2 = $capt = "";

//Digunakan untuk  memvalidasi semua data supaya data tidak kosong
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama_user"]) | empty($_POST["username_user"]) | empty($_POST["email_user"]) | empty($_POST["password_user"]) | empty($_POST["password_user2"]) | (empty($_POST["captcha_code"]))) 
    {
        if (empty($_POST["nama_user"])) {        //digunakan untuk memvalidasi nama supaya tidak kosong
            $namaErr = "Nama harus diisi";
        }else {
            $nama = test_input($_POST["nama_user"]);
        }

        if (empty($_POST["username_user"])) {        //digunakan untuk memvalidasi nama supaya tidak kosong
            $userErr = "username harus diisi";
        }else {
            $user = test_input($_POST["username_user"]);
        }

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
            $pass = test_input($_POST["password_user"]);
        }
        
        if (empty($_POST["password_user2"])) {     //mengecek supaya komentar tidak kosong
            if ($pass2 !== $pass) {
                $pass2Err = "Password tidak sama";
            }
        }else {
            $pass2 = test_input($_POST["password_user2"]);
        }
        
        if (empty($_POST["captcha_code"])) {      //mengecek supaya gender wajib dipilih salah satu
            $captErr = "Harus di isi";
        }else {
            $capt = test_input($_POST["captcha_code"]);
        }
    }

    
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

include "Proses Login/connection_database.php";
$namaUser = $_POST['nama_user'];
$usernameUser = $_POST['username_user'];
$emailUser = $_POST['email_user'];
$passwordUser = md5($_POST['password_user']);
$passwordUser2 = md5($_POST['password_user2']);
$capt = md5($_POST['captcha_code']);

if ($namaUser == "") {
    header("location:registration.php?nama_user=kosong");

}else{
    echo "nama sudah di isi";
}
// $sql = "INSERT INTO users(username, nama_lengkap, email, password, captcha) VALUES ('$usernameUser', '$namaUser','$emailUser', '$passwordUser', '$capt')";
// $query=mysqli_query($con, $sql);
// mysqli_close($con);
// header('location:Proses Login/login.php');
?>