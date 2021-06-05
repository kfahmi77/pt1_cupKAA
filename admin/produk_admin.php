<?php
require_once "../view/header_admin.php";
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

<div class="main-container">
  <?php
  $id = $_GET['idproduk'];
  $ambildata = mysqli_query($conn, "SELECT idproduk,namaproduk,namajenis,deskripsi,harga,gambar FROM produk JOIN jenis_produk ON produk.jenisproduk=jenis_produk.idjenis WHERE idproduk='$id'");
  while ($row = mysqli_fetch_array($ambildata)) {
  ?>
    <div class="flex main">
      <div class="product" style="flex-basis:40%;">
        <img src="../dist/img/gambar_produk/<?php echo $row['gambar']; ?>" alt="" class="thumbnail">
      </div>
      <div class="desc card " style="flex-basis:50%;">
        <h2> Nama Produk </h2>
        <h3>Komposisi</h3>
        <ul>
          <li> <?php echo $row['namajenis']; ?> </li>
        </ul>
        <h3>Deskripsi</h3>
        <p><?php echo $row['deskripsi']; ?></p>
        <br>
        <h3><?php echo rupiah($row['harga']); ?></h3>
        <br>
        <a href="produk_edit.php?idproduk=<?php echo $row['idproduk']; ?>" class="link" style="text-align:center;"> Edit </a>

      </div>

      <!-- <div class="cart card flex">
        <h2>Keranjang</h2>
        <table>
          <tr class="table">
            <th>No</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
          </tr>
          <tr class="table">
            <td>1.</td>
            <td>Kopi es teh anget</td>
            <td>1</td>
            <td>Rp 15.000</td>
          </tr>
        </table>
        <br>
        <h3>Jumlah : Rp 15.000</h3><br>
        <a href="konfirmasi.php" class="link"> Konfirmasi Pembelian </a>
      </div> -->

    </div>
  <?php } ?>
</div>


<?php
require_once "../view/footer_admin.php";
?>