<?php
include '../script/koneksi.php';
session_start();
if (isset($_POST["login"])) {
  $user = $_POST["username"];
  $pass = $_POST["password"];

  $checkuser = mysqli_query($conn, "SELECT * FROM admin WHERE username='$user'");
  if (mysqli_num_rows($checkuser) === 1) {

    $result = mysqli_fetch_assoc($checkuser);

    if (password_verify($pass, $result["password"])) {
      $_SESSION["user"] = $user;
      $_SESSION["login"] = true;

      if (isset($_POST["rememeberme"])) {
        setcookie("login", "tetap_ingat", time() + 30);
      } else {
        echo "Cookie belum dibuat";
      }
      echo "
		<script>alert('Anda berhasil login');
		document.location.href='index_admin.php';
		</script>
		";
    }
  } else {
    print "<p style=\"color:red; font-style italic\">Username / Password salah!</p>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../dist/css/main.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title> Cup KAA - Online Coffee Shop </title>
</head>
<body>

    <div class="header flex">
      <a href=""><img class="logo" src="../dist/img/coffee-2358388_1920.jpg" alt=""></a>
      <ul class="navbar flex">
        <li><a href="../index.php" class="link"> Beranda </a></li>
        <li><a href="../produklist.php" class="link"> Produk </a></li>
        <li><a href="../tentang.php" class="link"> Tentang </a></li>
        <li><a href="../kontak.php" class="link"> Kontak </a></li>
      </ul>
    </div>

    <div class="login flex">
      <h1 class="title"> LOG IN </h1>
      <form action="" class="flex form" method="post">
        <!-- jang login, mun bisa pang nambahkeun validasi na -->
        <input class="input" type="text" name="username" placeholder="Nama" required>
        <input class="input" type="password" name="password" placeholder="Password" required>
        <input type="checkbox" name="rememberme" value="rememberme">Ingat Saya<br><br>
        <input type="submit" value="Masuk" class="link" name="login">

      </form>
    </div>



<?php
require_once "../view/footer_admin.php";
?>