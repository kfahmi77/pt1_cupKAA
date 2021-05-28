<?php
require_once "../view/header_admin.php";
?>

<div class="edit flex">
  <h1 class="title"> Edit Kontak </h1>

  <div class="edit-container flex">
    <div class="img">
      <img src="../dist/icon/instagram.png" alt="">
    </div>

    <form action="" class="flex form form-kontak">
      <!-- isi value ku nu geus aya dina database, meh mun teu jadi ngedit bisa langsung pencet konfirm atau update -->
      <select class="input" name="peran" value="Peran" placeholder="peran" required>
        <option value="owner"> Owner </option>
        <option value="developer"> Developer </option>
      </select>
      <input class="input" type="text" name="nama" placeholder="Nama" value="" required>
      <textarea class="input" type="text" placeholder="Deskripsi" value="" required style="resize: none;"></textarea>
      <input type="text" class="input"  placeholder="Id Line" value="">
      <input type="text" class="input"  placeholder="No. WhatsApp" value="">
      <input type="text" class="input"  placeholder="Instagram" value="">
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