<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Login</h2>
        </div>
        <form action="registration.php" method="post">
            <div>
                <label for="email">E-mail : </label>
                <input type="text" name="email" required>
            </div>
            <div>
                <label for="password1">Password : </label>
                <input type="password" name="password1" required>
            </div>
            <button type="submit" name="login_user">Login</button>
            <p>Belum memiliki akun? <a href="registration.php"><b>Daftar</b></a></p>
        </form>
    </div>
</body>
</html>