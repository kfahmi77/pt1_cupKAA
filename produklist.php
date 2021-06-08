<?php
require_once "view/header.php";
include 'script/koneksi.php';
?>

<div class="grid produk-list main-container">
  <?php
  $query = "SELECT idproduk,namaproduk,namajenis,deskripsi,harga,gambar FROM produk JOIN jenis_produk ON produk.jenisproduk=jenis_produk.idjenis ORDER BY idproduk ASC";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <div class="produk-item card flex">
      <img class="thumb" src="dist/img/gambar_produk/<?php echo $row['gambar']; ?>" alt="">
      <h2> <?php echo $row['namaproduk']; ?> </h2>
      <p><?php echo substr($row['deskripsi'], 0, 70) ?>...</p>
      <h3><?php echo rupiah($row['harga']); ?></h3>
      <a href="produk.php?idproduk=<?php echo $row['idproduk']; ?>" class="link">Lihat Produk</a>
    </div>
  <?php  } ?>
</div>

<?php
require_once "view/footer.php";
?>