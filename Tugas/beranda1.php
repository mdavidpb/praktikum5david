<?php
    session_start();
    include("function1.php");
    echo check_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <h3><a href="profil.php">Edit Profil</a></h3>
    <h3><a href="logout1.php">Logout!</a></h3>
</body>
</html>
