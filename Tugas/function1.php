<?php
    function do_login($username, $password){
        //cek kondisi jika username dan password salah
        if($username != "admin" || $password != "admin"){
            header("location: form-login.php?error=wrong");
        }
        // cek kondisi jika username dan password benar
        if($username == "admin" && $_POST["password"] == "admin"){
            $_SESSION["user"] = $username;
            $_SESSION["pass"] = $password;

            header("location: beranda1.php");
        }
    }

    function check_login(){
        // cek kondisi login session
        if(!isset($_SESSION['user'])){
            header("location: form-login.php");
        }
    }
?>
