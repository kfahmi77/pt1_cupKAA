<?php
require_once "../view/header_admin.php";
include '../script/koneksi.php';
?>

<div class="edit flex">
  <h1 class="title"> Edit Produk </h1>

  <div class="edit-container flex">
    <div class="img">
      <img src="../dist/icon/instagram.png" alt="">
    </div>

    <form action="proses_tambah_produk.php" method="post" class="flex form" enctype="multipart/form-data">
      <!-- isi value ku nu geus aya dina database, meh mun teu jadi ngedit bisa langsung pencet konfirm atau update -->
      <input class="input" type="text" name="namaproduk" placeholder="Nama Produk" required>
      <select class="input" name="jenisproduk" id="pengiriman" required>
        <option value="">Silahkan pilih</option>
        <?php
        $ambildata = mysqli_query($conn, "SELECT idjenis,namajenis FROM  jenis_produk");
        while ($row = mysqli_fetch_array($ambildata)) {
        ?>
          <option value="<?php echo $row['idjenis']; ?>"><?php echo $row['namajenis']; ?></option>
        <?php }
        ?>
      </select>
      <textarea class="input" type="text" placeholder="Deskripsi" required style="resize: none;" name="deskripsi"></textarea>
      <input class="input" type="text" name="harga" placeholder="Harga Produk" value="" required>
      <div class="input">
        <label for="img">Select image:</label>
        <input type="file" name="gambar">
      </div>
      <button type="submit" class="link">Tambah</button>

    </form>
  </div>
</div>

<?php
require_once "../view/footer_admin.php";
?>