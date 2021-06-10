<?php
include '../script/koneksi.php';
session_start();
if (isset($_COOKIE["login"])) {
  if ($_COOKIE["login" == "true"]) {
    $_SESSION["login"] = true;
  }
}
if (!isset($_SESSION["login"])) {
  echo "<script>alert('Halaman tidak bisa diakses :)')
	document.location.href='index.php';
	</script>";
  die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../dist/css/dashboard.css">
  <title>Cup KAA</title>
</head>

<body>
  <div class="content">
    
    <div class="header flex">
      <a href="index.php"><img class="logo" src="../dist/img/logo-cup-kaa.png" alt=""></a>
      <ul class="navbar flex" id="navbar">
        <li><span class="closeNav link" onclick="closeNav()">&times;</span></li>
        <li class="list"><a href="index_admin.php" class="link"> Beranda </a></li>
        <li class="list"><a href="produklist_admin.php" class="link"> Produk </a></li>
        <li class="list"><a href="tentang_admin.php" class="link"> Tentang </a></li>
        <li class="list"><a href="kontak_admin.php" class="link"> Kontak </a></li>
        <li class="list"><a href="logout.php" class="link" onclick="return confirm('Anda ingin Logout?')"> Logout </a></li>   
        <li class="list"><a href="edit_password.php?idproduk=<?php echo $row['idproduk']; ?>" class="link" style="width:100%"> Edit Password </a></li>    
      </ul>
      <span class="menu-small" onclick="openNav()">
        <div class="menu-burger"></div>
        <div class="menu-burger"></div>
        <div class="menu-burger"></div>
      </span>
    </div>

    <div class="background flex" style="background-image: url('../dist/img/coffee-1711431_1920.jpg');">
      <div class="container">
        <?php
        $query = "SELECT * FROM quote";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <h1><?php echo $row['judul']; ?></h1><br>
          <p><?php echo $row['deskripsi']; ?></p>
          <br><br>
          <div class="link-dash flex">
            <a href="dashboard_edit.php?idquote=<?php echo $row['idquote']; ?>" class="link"> Edit </a>
          <?php } ?>
          </div>
      </div>
    </div>
  </div>

  <div class="footer flex">
  <p> &copy; Kopi Abah Ambu - BETA Telkom (Gaaf - KF) 2021 </p>
  </div>
  
  <script>
    function openNav(){
      document.getElementById("navbar").style.width = "100%"
    }
    function closeNav(){
      document.getElementById("navbar").style.width = "0%";
    }
  </script>
</body>
</html>


</html>