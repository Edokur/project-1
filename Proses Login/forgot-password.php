<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <?php 
  include "connection_database.php";
  if(isset($_SESSION['email_user']) != ''){
    header("Location:login.php");
    exit();
  }

  $err ="";
  $sukses ="";
  $email ="";

  if(isset($_POST['submit'])){
    $emailUser = $_POST['email_user'];
    if ($email == '') {
      $err = "Silahkan Masukkan Email";
    }else {
      $sql_email = "SELECT * FROM users WHERE email='$emailUser";
      $login=mysqli_query($con,$sql);
      $ketemu=mysqli_num_rows($login);

      if ($ketemu > 0) {
        $err = "Email: $emailUser Tidak DItemukan";
      }
    }

    if(empty($err)){
      $token_ganti_password = md5(rand(0,1000));
      $judul_email          = "Ganti Password";
      $isi_email            = "Seseorang meminta untuk melakukan perubahan password. silahkan klik link di bawah ini : <br/>";
      $isi_email            .= url_dasar(). "change_password.php?email=$emailUser&token=$token_ganti_password";
      
    }
  }
  ?>
  </head>
  <body>
    <form action="check-email.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email_user">
  </div>
  <button type="submit" class="btn btn-primary" name="forgot">Submit</button>
</form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>