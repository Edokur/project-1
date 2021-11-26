<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    </head>
    <body>
        <div class="container">
            <form action="check_register.php" method="post">
            <h2>Tambah User</h2>
                <table>
                    <tr><td>Username</td><td> : <input name='username_user' type='text'></td></tr>
                    <tr><td>Password</td><td> : <input name='password_user' type='password'></td></tr>
                    <tr><td>Nama Lengkap</td><td> : <input name='nama_user' type='text'></td></tr>
                    <tr><td>Email </td><td> : <input name='email_user' type='text'></td></tr>
                </table>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
