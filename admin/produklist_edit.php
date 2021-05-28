<?php
require_once "../view/header_admin.php";
?>

<div class="edit flex">
  <h1 class="title"> Edit Produklist </h1>

  <div class="edit-container flex">
    <div class="img">
      <img src="../dist/icon/instagram.png" alt="">
    </div>

    <form action="" class="flex form" hidden>
      <!-- isi value ku nu geus aya dina database, meh mun teu jadi ngedit bisa langsung pencet konfirm atau update -->
      <input class="input" type="text" name="judul" placeholder="Judul" value="" required hidden>
      <textarea class="input" type="text" placeholder="Deskripsi" value="" required style="resize: none;"></textarea>
      <div class="input">
        <label for="img">Select image:</label>
        <input type="file" id="img" name="img" accept="image/*">
      </div>
      <input type="button" value="Update" class="link" >
    </form>
  </div>
</div>

<?php
require_once "../view/footer_admin.php";
?>