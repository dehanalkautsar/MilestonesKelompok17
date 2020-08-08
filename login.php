<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Masuk | UMKM Go</title>
    <link href="./style1.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h2>Welcome to<h2>
    <h1>UMKM <span class="go">go</span></h1>
        <div class="header">
            <h2>MASUK</h2>
        </div>
        <form action="login.php" method="post">
        <?php include('errors.php') ?>
            <div>
                <label for="email">E-mail : </label>
                <input type="text" name="email" required>
            </div>
            <div>
                <label for="password1">Password : </label>
                <input type="password" name="password1" required>
            </div>
            <div class="align">
                <button type="submit" name="login_user">Masuk</button>
                <p>Belum memiliki akun? <a href="registration.php"><b>Daftar</b></a></p>
            </div>
        </form>
    </div>
</body>
</html>