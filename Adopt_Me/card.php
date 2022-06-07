
<link rel="stylesheet" href="style2.css">
<?php require 'config/koneksi.php';
$stmt = koneksi()->prepare("SELECT * FROM data_kucing");
$stmt->execute();
$result = $stmt->fetchAll();
?>
<?php foreach( $result as $row ) : ?>
  <a href="item.php">
<div class="card">
  <img src="<?= $row['foto'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Nama :  <?= $row['nama_kucing'] ?></p>
    <p class="card-text">Umur :  <?= $row['umur'] ?></p>
    <p>Alamat :  <?= $row['alamat'] ?></p>
    <p>Keterangan :  <?= $row['keterangan'] ?></p>
  </div>
</div><br><br><br><br><br><br><br><br><br>
</a>
<?php endforeach; ?>