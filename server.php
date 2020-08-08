<?php
session_start();

//Variabel
$role= "";
$nama = "";
$email = "";
$password1 = "";
$password2 = "";
$usaha = "";
$bidang = "";

$errors = array();

//Connect to Database
$db = mysqli_connect('localhost','root','','account') /*ip, user, password, database*/ or die("Tidak bisa tersambung pada server");

//Registration
if(isset($_POST['role'])){
    $role = mysqli_real_escape_string($db, $_POST['role']);
    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);
    $usaha = mysqli_real_escape_string($db, $_POST['usaha']);
    $bidang = mysqli_real_escape_string($db, $_POST['bidang']);

    //Form Validation
    if(empty($role)) {array_push($errors, "Pilih role");}
    if(empty($nama)) {array_push($errors, "Masukkan nama");}
    if(empty($email)) {array_push($errors, "Masukkan e-mail");}
    if(empty($password1)) {array_push($errors, "Masukkan password");}
    if($password1 != $password2) {array_push($errors, "Password harus sama");}
    if(empty($usaha)) {array_push($errors, "Masukkan nama usaha");}
    if(empty($bidang)) {array_push($errors, "Masukkan bidang usaha");}

    //Check Database for Existing User with same Email
    $email_check_query = "SELECT * FROM user WHERE email = '$email' LIMIT 1";

    $result = mysqli_query($db, $email_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        if($user['email'] === $email){array_push($errors,"Email sudah dipakai pengguna lain");}
    }

    //Register jika tidak ada error
    if(count($errors) == 0){
        $password = md5($password1); //Enkripsi password
        $query = "INSERT INTO user (role, nama, email, password, usaha, bidang) VALUES('$role', '$nama', '$email', '$password', '$usaha', '$bidang')";
        
        mysqli_query($db, $query);
        $_SESSION['email'] = $email;
        $_SESSION['sukses'] = "Anda sudah masuk";

        header('location: index.php');
    }
}

//Login
if(isset($_POST['login_user'])){
    
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password1']);

    if(empty($email)){

        array_push($errors, 'Masukkan e-mail');
    }

    if(empty($password)){

        array_push($errors, 'Masukkan password');
    }

    if(count($errors) == 0){

        $password = md5($password);
        $query = "SELECT * FROM user where email='$email' AND password ='$password' ";
        $result = mysqli_query($db, $query);

        if(mysqli_num_rows($result)){
            $_SESSION['email'] = $email;
            $_SESSION['sukses'] = "Anda sudah masuk";
        
            echo 'berhasil';
            header('location: index.php');           
        }else{
            array_push($errors, 'E-mail dan Password tidak cocok');
        }
    }

}

?>