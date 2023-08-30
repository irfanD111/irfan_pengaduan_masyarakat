<?php 
 
 
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body>

        <div class="container">
        <form action="proses_login.php" method="POST">
          <h1>Login</h1>
            <form>
                <label>Username</label><br>
                <input type="text" name="username"><br>
                <label>Password</label><br>
                <input type="password" name ="pw"><br>
                <button type="submit">Log in</button>
                <p>Belum punya akun?silahkan<a href="daftar.php">Daftar</a></p>
            </form>
        </div>     
    </body>
</html