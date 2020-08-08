<?php if(isset($_POST['role'])){ include('server.php'); } ?>
<!DOCTYPE html>
<html>
<head>
    <title>Buat Akun | UMKM Go</title>
    <link href="./style1.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h2>Welcome to<h2>
    <h1>UMKM <span class="go">go</span></h1>
        <div class="header">
            <h2>DAFTAR AKUN</h2>
        </div>
        <form action="registration.php" method="post">
            <?php include('errors.php') ?>
            <div>
                <label>Role : </label>
                <input type="radio" name="role" value="admin" required>
                <label for="role">Admin</label>
                <input type="radio" name="role" value="user" required>
                <label for="role">User</label>
            </div>
            <div>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" required>
            </div>
            <div>
                <label for="email">E-mail : </label>
                <input type="text" name="email" required>
            </div>
            <div>
                <label for="password1">Password : </label>
                <input type="password" name="password1" required>
            </div>
            <div>
                <label for="password2">Validasi Password : </label>
                <input type="password" name="password2" required>
            </div>
            <div>
                <label for="usaha">Nama Usaha : </label>
                <input type="text" name="usaha" required>
            </div>
            <div>
                <label for="bidang">Bidang Usaha : </label>
                <input type="text" name="bidang" required>
            </div>
            <div class="align">
                <button type="submit">Buat Akun</button>
                <p>Sudah memiliki akun? <a href="login.php"><b>MASUK</b></a></p>
            <div>
        </form>
    </div>
</body>
</html>