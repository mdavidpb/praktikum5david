<?php
    session_start();
    if(isset($_SESSION["user"])){
        header("location: beranda1.php");
    }
    include ("function1.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="form-login.css">
  </head>
  <body>
    <div class="form">
    <h1>Login</h1>
  <table>
    <div class="tabel">
    <?php
    if(isset($_GET['notif'])){
        if($_GET['notif'] == "logout"){
            echo "<h3>Berhasil logout!</h3>";
        }
    }

    if(isset($_POST['simpan'])){
        echo do_login($_POST['username'], $_POST['password']);
        ?>

      <?php
        if(isset($_GET["login_error"])){
            echo "<h2 style='color:red';>Username atau password salah</h2>";
        }
      }
      if(isset($_GET['notif'])){
          if($_GET['notif'] == "logout"){
              echo "<h3>Berhasil logout!</h3>";
          }
      }

      if(isset($_POST['simpan'])){
          echo do_login($_POST['username'], $_POST['password']);
        }
      ?>
      <div class="form">
        <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <input required type="text" name="username" placeholder="username"/>
          <input required type="password" name="password" value="" placeholder="password"/>
          <button type="submit" name="simpan" value="Login" onclick="return">login</button>
          <p class="message">Gak punya akun? <a href="#">Buat dulu dong!</a> Lupa Password? </p>
        </form>
      </div>
    </div>
  </table>
</div>
  </body>
</html>
