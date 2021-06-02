<?php
require_once "view/header.php";
?>

<div class="login flex">
  <h1 class="title"> LOG IN</h1>
  <form action="" class="flex form">
      <!-- isi value ku nu geus aya dina database, meh mun teu jadi ngedit bisa langsung pencet konfirm atau update -->
    <input class="input" type="text" name="nama" placeholder="Nama" required>
    <input class="input" type="password" name="pass" placeholder="Password" required>

    <input type="button" value="Masuk" class="link" >

  </form>
</div>



<?php
require_once "view/footer.php";
?>