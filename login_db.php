<?php
require('dbcon.php');
session_start();

if(isset($_POST['log_in'])){
    //รับค่าและกรอง
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $encodePass = md5($password);

    //เช็ค email and password
    $check_login = "SELECT * FROM user WHERE username = '$username' AND password = '$encodePass'";
    $query = mysqli_query($conn, $check_login);

    //เช็คว่ามีบัญชีจริง
    if(mysqli_num_rows($query) == 1){
        $_SESSION['username'] = $username;
        header('location: index.php');
    }else{
        $_SESSION['err_wrong'] = "Email or Password wrong";
        header('location: login.php');
    }
}
?>