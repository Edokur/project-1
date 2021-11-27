<?php
include "connection_database.php";
$emailUser = $_POST['email_user'];
$sql="SELECT * FROM users WHERE email='$emailUser'";
$login=mysqli_query($con,$sql);
$ketemu=mysqli_num_rows($login);
$r= mysqli_fetch_array($login);

if($emailUser == false){
  header('Location: login-user.php');
}
if ($ketemu > 0){
  session_start();
  $_SESSION['emailUser'] = $emailUser;
  $_SESSION['status'] = "login";
  echo"USER BERHASIL LOGIN<br>";
  header("location:login.php");
}
else{
  echo "<center>Login gagal! username & password tidak benar<br>";
  echo "<a href=index.php><b>ULANGILAGI</b></a></center>";
}
mysqli_close($con);
?>