<?php
include_once "database.php";
$id_kota = $_GET['id_kota'];
$pencarian = mysqli_query($koneksi, "SELECT * FROM kota WHERE id_kota = $id_kota");
$hasil_pencarian = mysqli_fetch_array($pencarian);
$jumlah_baris = mysqli_num_rows($pencarian);
if($jumlah_baris > 0){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Suggest Data dengan PHP dan jQuery Ajax</title>
</head>
<body>
<h1><?php echo $hasil_pencarian['nama_kota']; ?></h1>
<p><strong><?php echo $hasil_pencarian['provinsi']; ?></strong></p>
<p><?php echo $hasil_pencarian['keterangan']; ?></p>
<p><a href="index.php">CARI LAGI</a></p>
</body>
</html>
<?php 
}
else{
	echo "Tidak ada Kota";
}
?>