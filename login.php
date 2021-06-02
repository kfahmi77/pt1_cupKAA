<?php
require_once "view/header.php";
?>

<div class="login flex">
  <h1 class="title"> LOG IN</h1>
  <form action="" class="flex form">
      <!-- jang login, mun bisa pang nambahkeun validasi na -->
    <input class="input" type="text" name="nama" placeholder="Nama" required>
    <input class="input" type="password" name="pass" placeholder="Password" required>

    <input type="button" value="Masuk" class="link" >

  </form>
</div>



<?php
require_once "view/footer.php";
?>
