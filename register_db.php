<?php
require('dbcon.php');
session_start();

if(isset($_POST['sing_up'])){
    //รับข้อมูลและกรอง
    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password_com = mysqli_real_escape_string($conn, $_POST['password_com']);

    //เช็ค password ตรงกัน
    if($password != $password_com){
        $_SESSION['err_pass'] = "Password not match";
        header('location: register.php');
    }else{
        //เช็ค username, email ซ้ำ
        $check_repeat = "SELECT * FROM user WHERE username = '$username' OR Email = '$email'";
        $query = mysqli_query($conn, $check_repeat);
        $result = mysqli_fetch_assoc($query);

        if($result){
            //เช็ค username
            if($result['username'] === $username){
                $_SESSION['err_username'] = "Username repeat";
                header('location: register.php');
            }
            //เช็ค email
            if($result['Email'] === $email){
                $_SESSION['err_email'] = "Email repeat";
                header('location: register.php');
            }
        }else{
            // เข้ารหัส password
            $encodePass = md5($password);
            // เก็บข้อมูลใส่ Database
            $insertData = "INSERT INTO user(FirstName, LastName, username, Email, password) VALUES ('$fname', '$lname', '$username', '$email', '$encodePass')";
            $query = mysqli_query($conn, $insertData);

            //ส่ง session username 
            $_SESSION['username'] = $username;
            header('location: index.php');
        }

    }
}
?>