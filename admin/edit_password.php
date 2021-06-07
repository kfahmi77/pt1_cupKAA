<?php
require_once "../view/header_admin.php";
include '../script/koneksi.php';
?>

    <div class="edit login flex">
      <h1 class="title"> Edit Password </h1>
      <form action="" class="flex form" method="post">
        
        <!-- jang id atau syarat ganti passwordna -->
        <input type="hidden" name="" value="">
        
        <!-- jang login, mun bisa pang nambahkeun validasi na -->
        <input class="input" type="text" name="username" placeholder="Nama" required>
        <input class="input" type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Edit" class="link" name="edit">

      </form>
    </div>

<?php
require_once "../view/footer_admin.php";
?>