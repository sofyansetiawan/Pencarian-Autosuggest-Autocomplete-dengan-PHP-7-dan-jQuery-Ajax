<ul id="hasil_pencarian">
<?php
include_once "database.php";

if(isset($_POST['dicari'])){
	$input_pencarian = mysqli_real_escape_string($koneksi, $_POST['dicari']);
	if(strlen($input_pencarian) > 0) {
		$query_pencarian = mysqli_query($koneksi, "SELECT * FROM kota WHERE nama_kota LIKE '%" . $input_pencarian . "%' ORDER BY id_kota LIMIT 6");
		if($query_pencarian) {
			while($hasil_pencarian = mysqli_fetch_array($query_pencarian)) {
				echo '<li><p><a href="tampildata.php?id_kota='.$hasil_pencarian['id_kota'].'">';
				echo $hasil_pencarian['nama_kota'].'</a></p></li>';
			}
		}
		else{
			echo 'ERROR: Ada kesalahan pada query pencarian.';
		}
	}
}
?>
</ul>